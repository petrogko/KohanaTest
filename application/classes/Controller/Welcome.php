<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

    public function action_index()
    {
        print('<a href="contest">Contest</a><br><br>');
        print('<h1> This is FIZZBUZZ</h1><br><br>');

        $count = 100;

        for($i = 0; $i <= $count; $i++) {

            if ($i % 3 == 0 && $i % 5 == 0) {
                echo $i.':fizzbuzz'."<br>";
            }elseif ($i % 3 == 0) {
                echo $i.':fizz'."<br>";
            }elseif ($i % 5 == 0) {
                echo $i.':buzz'."<br>";
            }else{
                echo $i.":".$i."<br>";
            }

        }
    }

} // End Welcome
