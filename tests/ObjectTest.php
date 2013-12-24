<?php

include 'TinCanValidation.php';
include 'tests/Statement.php';
include 'tests/User.php';

class ObjectTest extends PHPUnit_Framework_TestCase {

	public function testObject(){

		$statement = array('object' => array(
				            'objectType'    => 'Activity',
				            'id'            => 'http://learninglocker.net',
				            'definition'    => array(
				                'name'      => array(
				                    'en-US' => 'Learning Locker',
				                    'en-GB' => 'Learning Locker'
				                ),
				                'description' => array(
				                	'en-US' => 'Open source learning record store',
                					'en-GB' => 'Open source learning record store'
                				),
                				'type' => 'http://ht2.co.uk',
                				'extensions' => array(
                					'http://learninglocker.net/extensions/hashtag' => 'learninglocker')
				            )
				        ));

		$user  = new User; //get sample user object

		//we only pass a partial statement containing an actor for testing
		$validate = new TinCanValidation( $statement, $user );
		$validate->validateObject();

	}

}