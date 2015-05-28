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

        $params = $this->request->post();
        $contest = $this->getContest();
        $id = isset($this->request->param()['id']) ? $this->request->param()['id'] : null;

        if($id !== null) {

            $params = $this->getContest()->where('id','=',$id)->find()->as_array();
            $view->set('params',$params);

        }else{

            if (!empty($params)) {
                $contest->first_name = $params['first_name'];
                $contest->email = $params['email'];

                try{
                    $contest->save();
                    $this->redirect('contest/entry/'.$contest->id);
                }catch (ORM_Validation_Exception $e) {
                    $errors = $e->errors('models');
                    $view->set('errors',$errors);
                    $view->set('params',$params);
                }
            }
        }

        $this->response->body($view);
    }

    private function getContest() {
        return ORM::factory('contest');
    }


} // End Welcome
