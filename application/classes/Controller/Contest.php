<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contest extends Controller {

    public $contest_view = 'contest_view';
    public $contest_entry_view = 'contest_entry_view';
    public $contest_entry_edit_view = 'contest_entry_edit_view';

    public function action_index()
    {

        $contestUsers = $this->getContest()->find_all()->as_array();
        $userCount = count($contestUsers);

        $view = View::factory($this->contest_view)
            ->set('users', $contestUsers)
            ->set('userCount', $userCount);
        $this->response->body($view);
        unset($contestUsers);
    }

    public function action_contest_entry() {

        $view = View::factory($this->contest_entry_view);
        $params = $this->request->post() !== null ? $this->request->post() : null;
        $contest = $this->getContest();

        if (!empty($params)) {
            print_r($params);
            $contest->first_name = $params['first_name'];
            $contest->email = $params['email'];

            try{
                $contest->save();
                $this->redirect('en/contest/entry/'.$contest->id);
            }catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('models');
                $view->set('errors',$errors);
            }
        }
        $params['label'] = 'Add';
        $view->set('params',$params);
        $this->response->body($view);
    }

    public function action_contest_entry_edit() {

        $view = View::factory($this->contest_entry_view);
        $id = isset($this->request->param()['id']) ? $this->request->param()['id'] : null;

        $params = $this->getContest()->where('id','=',$id)->find()->as_array();
        $params['action'] = '/'.$id.'/update';
        $params['label'] = 'Update';
        $view->set('params',$params);

        $this->response->body($view);

    }

    public function action_contest_entry_update() {

        $params = $this->request->post() !== null ? $this->request->post() : null;
        $id = isset($this->request->param()['id']) ? $this->request->param()['id'] : null;
        $contest = $this->getContest()->where('id','=',$id)->find();

        if(!empty($contest)) {
            $contest->first_name = $params['first_name'];
            $contest->email = $params['email'];

            try {
                $contest->update();
            } catch (Exception $e) {
                print_r($e->getMessage());
            }
        }
        $this->redirect('en/contest/entry/'.$contest->id);
    }

    private function getContest() {
        return ORM::factory('contest');
    }


} // End Welcome
