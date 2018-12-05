<?php

class ManageActivityController extends BaseController {

	
	public function showActivityAdd()
	{
		return View::make('manage.activity_add');
	}

	public function actionActivityAdd()
	{
		$activity = new Activity;
		$activity->activity_name = Input::get("activityname");
		$activity->description = Input::get("activitydetail");
		$activity->teacher = json_encode(Input::get("teacher"));
		$activity->day_start = Input::get("daystart");
		$activity->day_end = Input::get("dayend");
		$activity->time_start = Input::get("timestart");
		$activity->time_end = Input::get("timeend");
		$activity->term_year = Input::get("term");
		$activity->sector = Input::get("sector");
		$activity->location = Input::get("location");
		$activity->image = Input::get("file");
		$activity->student = json_encode(Input::get("years"));
		$reuslt = $activity->save();
		return ($reuslt) ? 'true' : 'false';
		// return json_encode(Input::get("years"));
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
