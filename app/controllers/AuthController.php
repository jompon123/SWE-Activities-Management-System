<?php

class AuthController extends BaseController {

	
	public function showLogin()
	{
		return View::make('login');
	}
	public function actionLogin()
	{	
		if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')))){
			return Redirect::to('manage/activity/summary/useradd')->with('message','เข้าสู่ะบบสำเร็จ');
		}else{
			return Redirect::to('login')->with('error','ไม่สามารถเข้าสู่ะบบสำเร็จ');
		}
	}
    
}