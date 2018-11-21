<?php

class ManageUserController extends BaseController {

	
	public function showUser()
	{
		return View::make('manage.user');
    }
    
    public function showUserAdd()
	{
		return View::make('manage.user_add');
	}

	public function actionUserAdd()
	{
		$firstname = Input::get("firstname");
		return $firstname;
	}

}
