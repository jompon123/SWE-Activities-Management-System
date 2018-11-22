<?php

class ManageUserController extends BaseController {

	
	public function showUserStudent()
	{
		return View::make('manage.user_student');
	}
	
	public function showUserTeacher()
	{
		return View::make('manage.user_teacher');
    }
    
    public function showUserAdd()
	{
		return View::make('manage.user_add');
	}

	public function actionUserAdd()
	{
		$user = new User;
		$user->username = Input::get("student_id");
		$user->password = Input::get("password");
		$reuslt = $user->save();
		return ($reuslt) ? 'true' : 'false';
	}

}
