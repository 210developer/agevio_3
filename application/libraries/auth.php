<?php

public $roles;
public $permissions;

class Auth{

	public function __construct()
	{
		$roles['admin'] = array('r','w','x');
		$roles['user'] = array('r','w');
		$roles['guest'] = array('r');
		
		$this->roles = $roles;
	}

}