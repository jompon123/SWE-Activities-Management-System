<?php

class ManageActivityController extends BaseController {

	
	public function showActivityAdd()
	{
		return View::make('manage.activity_add');
	}
	public function showActivityEdit($id)
	{
		
		$activity = Activity::find($id);
		if(is_null($activity)){
			return Redirect::to('manage/activity/summary/useradd')->with('error', 'ไม่พบกิจรรม');
		}
		return View::make('manage.activity_add',['activity'=>$activity]);
	}
	public function actionActivityAdd($id = null)
	{
		$rules = array(
			'activityname' => 'required',
			'daystart' => 'required|date_format:d/m/Y',
			'dayend' => 'required|date_format:d/m/Y',
			'timestart' => 'required|date_format:H:m',
			'timeend' => 'required|date_format:H:m',
			'sector' => 'required',
			'location' => 'required',
			'term' => 'required',
			'teacher' => 'required_without_all',
			'years' => 'required_without_all'
		);
		$validator = Validator::make(Input::all(),$rules);

		if($validator->fails()){
			if(isset($id)){
				return Redirect::to('manage/activity/edit/'.$id)->withInput()->withErrors($validator);
			}else{
				return Redirect::to('manage/activity/add')->withInput()->withErrors($validator);
			}
		}
			if(isset($id)){
				$activity = Activity::find($id);
			}else{
				$activity = new Activity;
			}
			
			$activity->activity_name = Input::get("activityname");
			$activity->description = Input::get("activitydetail");
			$activity->teacher = json_encode(Input::get("teacher"));
			$activity->day_start = $activity->coverTime(Input::get("daystart"));
			$activity->day_end = $activity->coverTime(Input::get("dayend"));
			$activity->time_start = Input::get("timestart");
			$activity->time_end = Input::get("timeend");
			$activity->term_year = Input::get("term");
			$activity->sector = Input::get("sector");
			$activity->location = Input::get("location");
			$activity->image = Input::get("file");
			$activity->student = json_encode(Input::get("years"));
		try {
			$reuslt = $activity->save();
		}
		catch ( \Exception $e ) {
			if(isset($id)){
				return Redirect::to('manage/activity/edit/'.$id)->withInput()->with('error', $e->getMessage());
			}else{
				return Redirect::to('manage/activity/add')->withInput()->with('error', $e->getMessage());
			}

		}
		if(isset($id)){
			return Redirect::to('manage/activity/edit/'.$id)->withInput()->with('message','แก้ไขสำเร็จ');
		}else{
			return Redirect::to('manage/activity/summary/useradd')->with('message','บันทึกสำเร็จ');
		}
		
		// return $activity->coverTime(Input::get('daystart'));
	}


	public function showActivitySummary()
	{
		return View::make('manage.activity_summary');
	}

	public function showActivitySummaryUseradd()
	{
		$activities = Activity::get();
		return View::make('manage.activity_summary_useradd',['activities' => $activities]);
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
