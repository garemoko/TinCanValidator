<?php

include 'TinCanValidation.php';
include 'tests/Statement.php';
include 'tests/User.php';

class VerbTest extends PHPUnit_Framework_TestCase {

	public function testActor(){

		$statement = array('verb' => array(
				            "id"        =>  "http://curatr3.com/define/verb/posted",
                			"display"   =>  array( "en-US" =>  "posted", "en-GB" =>  "posted" )
				        ));

		$user  = new User; //get sample user object

		//we only pass a partial statement containing an actor for testing
		$validate = new TinCanValidation( $statement, $user );
		$validate->validateVerb();

	}

}