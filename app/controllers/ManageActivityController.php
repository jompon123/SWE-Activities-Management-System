<?php

class ManageActivityController extends BaseController {

	
	public function showActivityAdd()
	{
		return View::make('manage.activity_add');
	}

	public function actionActivityAdd()
	{
		$rules = array(
			'activityname' => 'required',
			'daystart' => 'required',
			'dayend' => 'required',
			'timestart' => 'required',
			'timeend' => 'required',
			'sector' => 'required',
			'location' => 'required',
			'term' => 'required',
			'teacher' => 'required_without_all',
			'years' => 'required_without_all'
		);
		$validator = Validator::make(Input::all(),$rules);

		// if($validator->fails()){
		// 	return Redirect::to('manage/activity/add')->withInput()->withErrors($validator);
		// }
			$activity = new Activity;
		// 	$activity->activity_name = Input::get("activityname");
		// 	$activity->description = Input::get("activitydetail");
		// 	$activity->teacher = json_encode(Input::get("teacher"));
		// 	$activity->day_start = Input::get("daystart");
		// 	$activity->day_end = Input::get("dayend");
		// 	$activity->time_start = Input::get("timestart");
		// 	$activity->time_end = Input::get("timeend");
		// 	$activity->term_year = Input::get("term");
		// 	$activity->sector = Input::get("sector");
		// 	$activity->location = Input::get("location");
		// 	$activity->image = Input::get("file");
		// 	$activity->student = json_encode(Input::get("years"));
		// try {
		// 	$reuslt = $activity->save();
		// }
		// catch ( \Exception $e ) {
		// 	return Redirect::to('manage/activity/add')->with('error', $e->getMessage());
		// }
		// return Redirect::to('manage/activity/summary/useradd')->with('message','บันทึกสำเร็จ');
		return $activity->coverTime("Y-m-d",Input::get('daystart'));
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
