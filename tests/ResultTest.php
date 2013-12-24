<?php

include 'TinCanValidation.php';
include 'tests/Statement.php';
include 'tests/User.php';

class ResultTest extends PHPUnit_Framework_TestCase {

	public function testResult(){

		$statement = array('result' => array(
								'completion' => true, 
								'success' 	 => true, 
	    						'score'    	 => array(
	    										'raw' => 6.3, 
	    										'max' => 10, 
	    										'min' => 2),
	    						'response' 	 => 'Well done on completing this level', 
	    						'duration' 	 => 40, 
	    						'extensions' => array(
	    							'http://learninglocker.net/definitions/one' => 'This is an same extensions')
	    					)
						);

		$statement = array('result' => '');

		$user  = new User; //get sample user object

		//we only pass a partial statement containing an actor for testing
		$validate = new TinCanValidation( $statement, $user );
		$validate->validateObject();

	}

}