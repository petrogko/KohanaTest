<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contest extends Controller {

    public function action_index()
    {
        $this->response->body('hello, world!');
    }

    public function contest_details_action() {

    }

    public function contest_create_action() {
        // $this->request->param('key_name');
    }

    public function contest_edit_action() {

    }

} // End Welcome
