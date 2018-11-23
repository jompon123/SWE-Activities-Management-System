<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	echo "index test test test test";
});

//Front-end

//Manage
Route::get('/login', function(){
	return View::make('login');
});

Route::get('/manage', function(){
	return View::make('manage.index');
});


Route::get('/manage/activity/add', 'ManageActivityController@showActivityAdd');

Route::get('/manage/activity/summary', 'ManageActivityController@showActivitySummary');

Route::get('/manage/activity/summary/useradd', 'ManageActivityController@showActivitySummaryUseradd');

Route::get('/manage/activity/conclude', 'ManageActivityController@showActivityConclude');

Route::get('/manage/activity/detail', 'ManageActivityController@showActivityDetail');

Route::get('/manage/activity/check/status', 'ManageActivityController@showActivityStatus');

Route::get('/manage/user/student', 'ManageUserController@showUserStudent');

Route::get('/manage/user/teacher', 'ManageUserController@showUserTeacher');

Route::get('/manage/user/student/add', 'ManageUserController@showUserStudentAdd');
Route::post('/manage/user/student/add', 'ManageUserController@actionUserStudentAdd');

Route::get('/manage/user/teacher/add', 'ManageUserController@showUserTeacherAdd');