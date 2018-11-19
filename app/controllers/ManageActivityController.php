<?php

class ManageActivityController extends BaseController {

	
	public function showActivityAdd()
	{
		return View::make('manage.activity_add');
	}

	public function showActivity()
	{
		return View::make('manage.activity');
	}

	public function showActivitySummary()
	{
		return View::make('manage.activity_summary');
	}

	public function showActivityStatus()
	{
		return View::make('manage.activity_check_status');
	}


}
