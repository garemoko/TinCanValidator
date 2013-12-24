<?php

include 'TinCanValidation.php';
include 'tests/Statement.php';
include 'tests/User.php';

class ActorTest extends PHPUnit_Framework_TestCase {

	public function testActor(){

		$statement = array( 'actor' => array(
				            	'name'       =>  'Billy test',
				            	'mbox'       =>  'mailto:billytest@test.com',
				            	'objectType' =>  'Group'
				        	));

		$user  = new User; //get sample user object

		//we only pass a partial statement containing an actor for testing
		$validate = new TinCanValidation( $statement, $user );
		$validate->validateActor();

	}

}