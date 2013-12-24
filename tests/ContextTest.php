<?php

include 'TinCanValidation.php';
include 'tests/Statement.php';
include 'tests/User.php';

class ContextTest extends PHPUnit_Framework_TestCase {

	public function testContext(){

		$statement = array('context' => array(
								"instructor" => array(
						            "name" => "Irene Instructor",
						            "mbox" => "mailto:irene@example.com"
						         ),
						         "contextActivities" => array(
						             "parent" 	=> array( "id" => "http://example.com/activities/hang-gliding-class-a" ),
						             "grouping" => array( "id" => "http://example.com/activities/hang-gliding-school" )
						         )
	    					)
						);

		$user  = new User; //get sample user object

		//we only pass a partial statement containing an actor for testing
		$validate = new TinCanValidation( $statement, $user );
		$validate->validateContext();

	}

}