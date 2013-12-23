<?php

include 'TinCanValidation.php';
include 'tests/Statement.php';
include 'tests/User.php';

class ValidationTest extends PHPUnit_Framework_TestCase {

	public function testValidation(){

		$statement = new Statement; //get sample statement object
		$user      = new User;	 	//get sample user object

		//we only pass a partial statement containing a verb for testing
		$validate = new TinCanValidation( (array) $statement, (array) $user );
		$validate->runValidation();

	}

}