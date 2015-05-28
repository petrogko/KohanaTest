<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

    public $main_view = 'main_view';

    public function action_index()
    {

        $count = 100;
        $fizzbuzzArr = array();

        for($i = 0; $i <= $count; $i++) {

            if ($i % 3 == 0 && $i % 5 == 0) {
                $fizzbuzzArr[] = $i.':fizzbuzz'."<br>";
            }elseif ($i % 3 == 0) {
                $fizzbuzzArr[] = $i.':fizz'."<br>";
            }elseif ($i % 5 == 0) {
                $fizzbuzzArr[] = $i.':buzz'."<br>";
            }else{
                $fizzbuzzArr[] = $i.":".$i."<br>";
            }

        }

        $view = View::factory($this->main_view)
            ->set('fizzbuzz', $fizzbuzzArr);
        $this->response->body($view);

    }

} // End Welcome
