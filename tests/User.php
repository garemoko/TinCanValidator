<?php

class User {

	public $user = array('name' => 'Billy Test', 'mbox' => 'billy@learninglocker.net');
	
	public function __construct(){
		return $this->user;
	}

}