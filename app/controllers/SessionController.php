<?php

class SessionController extends BaseController {
	
	public function setSession()
	{
		$sName = Input::get('sessName');
		$sVal = Input::get('sessVal');
		
		$_SESSION[$sName] = $sVal;
		
		return $_SESSION[$sName];
	}
}