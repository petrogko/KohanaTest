<?php defined('SYSPATH') OR die('No direct access allowed.');

Class Model_Contest extends ORM
{

    protected $_table_name  = 'contest';
    protected $_table_columns = array(
        'id' => NULL,
	    'first_name' => NULL,
	    'email' => NULL
    );

    public function rules()
    {
        return array(
            'first_name' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 32)),
                array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
            'email' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 127)),
                array('email'),
            )
        );
    }
}