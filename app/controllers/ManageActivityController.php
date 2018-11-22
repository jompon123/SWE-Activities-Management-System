<?php

class ManageActivityController extends BaseController {

	
	public function showActivityAdd()
	{
		return View::make('manage.activity_add');
	}


	public function showActivitySummary()
	{
		return View::make('manage.activity_summary');
	}

	public function showActivitySummaryUseradd()
	{
		return View::make('manage.activity_summary_useradd');
	}

	public function showActivityConclude()
	{
		return View::make('manage.activity_conclude');
	}

	public function showActivityDetail()
	{
		return View::make('manage.activity_detail');
	}

	public function showActivityStatus()
	{
		return View::make('manage.activity_check_status');
	}


}
