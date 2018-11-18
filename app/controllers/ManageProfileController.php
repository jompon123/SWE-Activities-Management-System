<?php

class ManageProfileController extends BaseController {

	
	public function showProfile()
	{
		return View::make('manage.profile_teacher');
	}

}
