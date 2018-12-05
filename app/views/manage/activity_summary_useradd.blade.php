@extends('manage.layout')
@section('title')
test
@stop
@section('content')
<div class="container">
   <div class="page-header" style="margin-top:40px">
      <h2 class="mb-4 mr-sm-4 mb-sm-0">ประวัติการสร้างกิจกรรม
         <a href="{{url('/manage/activity/add')}}" class="aad btn btn-outline-success btn-secondary pull-right">เพิ่มกิจกรรม</a>
      </h2>
   </div>
   <br>
   <form>
      <div class="input-group">  
         <input type="text" id="s" name="s" class="form-control" placeholder="ค้นหาจากชื่อกิจกรรม">  
         <span class="input-group-btn">      
         <input type="submit" value="ค้นหา" class="btn btn-outline-secondary btn-secondary">  
         </span> 
      </div>
   </form>
   <table class="table table-striped" style="margin-top:20px">
      <thead>
         <tr class="table-success">
            <th class="text-center" style="padding-right:40px">ชื่อกิจกรรม</th>
            <th class="text-center" style="padding-right:50px">วันที่จัดกิจกรรม</th>
            <th class="text-center" style="padding-right:50px">วันที่สิ้นสุดกิจกรรม</th>
            <th class="text-center" style="padding-right:40px">อาจารย์ที่ปรึกษา</th>
            <th class="text-center" style="padding-right:40px">จัดการ</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td class="text-left">ค่ายScrum</td>
            <td class="text-left">22/12/2561</td>
            <td class="text-left">25/12/2561</td>
            <td class="text-left">ผู้ช่วยศาสตราจารย์ ฐิมาพร เพชรแก้ว </td>
            <td class="text-left">  
               <a href="{{url('/manage/activity/add')}}" class="btn btn-info btn-sm">แก้ไข</a>  
               <a href="{{url('/manage/activity/add')}}" class="btn btn-danger btn-sm">ลบ</a>
               <a href="{{url('/manage/activity/check/status')}}" class="btn btn-warning btn-sm">เช็คสถานะ</a>   
            </td>
         </tr>
         <tr>
            <td class="text-left">รับน้องทะเล</td>
            <td class="text-left">25/12/2561</td>
            <td class="text-left">28/12/2561</td>
            <td class="text-left">อาจารย์ ดร. พุทธิพร ธนธรรมเมธี </td>
            <td class="text-left">      
               <a href="{{url('/manage/activity/add')}}" class="btn btn-info btn-sm">แก้ไข</a> 
               <a href="{{url('/manage/activity/add')}}" class="btn btn-danger btn-sm">ลบ</a> 
               <a href="{{url('/manage/activity/check/status')}}" class="btn btn-warning btn-sm">เช็คสถานะ</a>   
            </td>
         </tr>
         <tr>     
      </tbody>
   </table>
</div>
@stop