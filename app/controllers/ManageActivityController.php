<?php

class ManageActivityController extends BaseController {

	
	public function showActivity()
	{
		return View::make('manage.activity_add');
	}

}
