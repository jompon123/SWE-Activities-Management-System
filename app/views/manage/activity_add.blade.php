@extends('manage.layout')
@section('title')
test
@stop
@section('cdn')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
@stop
@section('content')

<style>
.topping{
   text-align: right;
}
</style>

<form class="form-horizontal" autocomplete="off" enctype="multipart/form-data" method="post">
   <div class="container">
      <h2>สร้างข้อมูลกิจกรรม</h2>
      <hr>
      @include('error')
      <div class="row justify-content-md-center">
         <div class="col-sm-8">
            <div class="form-group">
               <label for="name">ชื่อกิจกรรม</label>
               <input type="text" class="form-control {{$errors->has('activityname') ? 'is-invalid' : ''}} " id="activityname" name="activityname" value="{{Input::old('activityname')}}" placeholder ="ชื่อกิจกรรม" >
               <small id="emailHelp" class="form-text text-danger">{{$errors->first('activityname')}}</small>
            </div>
            <div class="form-group">
               <label for="exampleFormControlTextarea1">รายละเอียดเพิ่มเติม</label>
               <textarea type="email" class="form-control" placeholder ="รายละเอียดเพิ่มเติม" id="activitydetail" name="activitydetail"> </textarea>
            </div>
            <div class="row">
               <div class="col">
                  <div class="form-group">
                     <label for="name">วันที่เริ่มกิจกรรม</label>
                     <input type="text" class="form-control {{$errors->has('daystart') ? 'is-invalid' : ''}}" id="daystart" name="daystart" value="{{Input::old('daystart')}}" data-toggle="datetimepicker" data-target="#daystart" placeholder ="00/00/0000">
                     <small id="emailHelp" class="form-text text-danger">{{$errors->first('daystart')}}</small>
                  </div>
               </div>
               <div class="col">
                  <div class="form-group">
                     <label for="name">วันที่สิ้นสุดกิจกรรม</label>
                     <input type="text" class="form-control {{$errors->has('dayend') ? 'is-invalid' : ''}}" id="dayend" name="dayend"  value="{{Input::old('dayend')}}" data-toggle="datetimepicker" data-target="#dayend" placeholder ="00/00/0000">
                     <small id="emailHelp" class="form-text text-danger">{{$errors->first('dayend')}}</small>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <div class="form-group">
                     <label for="name">เวลาที่เริ่มกิจกรรม</label>
                     <input type="text" class="form-control {{$errors->has('timestart') ? 'is-invalid' : ''}}" id="timestart" name="timestart" value="{{Input::old('timestart')}}" data-toggle="datetimepicker" data-target="#timestart" placeholder ="00:00">
                     <small id="emailHelp" class="form-text text-danger">{{$errors->first('timestart')}}</small>
                  </div>
               </div>
               <div class="col">
                  <div class="form-group">
                     <label for="name">เวลาที่สิ้นสุดกิจกรรม</label>
                     <input type="text" class="form-control {{$errors->has('timeend') ? 'is-invalid' : ''}}" id="timeend" name="timeend" value="{{Input::old('timeend')}}" data-toggle="datetimepicker" data-target="#timeend"  placeholder ="00:00">
                     <small id="emailHelp" class="form-text text-danger">{{$errors->first('timeend')}}</small>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <div class="form-group">
                     <label for="term">ภาคการศึกษา</label>
                     <select id="term" name="term"  placeholder ="ภาคการศึกษา" class="form-control {{$errors->has('term') ? 'is-invalid' : ''}}">
                        <option value="">- เลือกภาคการศึกษา -</option>
                        <option value="1" {{(Input::old('term')==1)?'selected':''}} >ภาคการศึกษาที่ 1</option>
                        <option value="2" {{(Input::old('term')==2)?'selected':''}} >ภาคการศึกษาที่ 2</option>
                        <option value="3" {{(Input::old('term')==3)?'selected':''}} >ภาคการศึกษาที่ 3</option>
                     </select>
                     <small id="emailHelp" class="form-text text-danger">{{$errors->first('term')}}</small>
                  </div>
               </div>
               <div class="col">
                  <div class="form-group">
                     <label for="name">ปีการศึกษา</label>
                     <input type="text" class="form-control {{$errors->has('sector') ? 'is-invalid' : ''}}" id="sector" name="sector" value="{{Input::old('sector')}}"  placeholder ="ปีการศึกษา" >
                     <small id="emailHelp" class="form-text text-danger">{{$errors->first('sector')}}</small>
                  </div>
               </div>
            </div>

            <label for="name">อาจารย์ที่รับผิดชอบ</label>
            <div class="row">
               <div class="col-6">
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox"  name="teacher[]" id="teacher1" value="1" {{(!is_null(Input::old('teacher')) && in_array("1",Input::old('teacher')))?'checked':''}}>
                     <label class="form-check-label" for="teacher1">                                                                            
                        ผู้ช่วยศาสตราจารย์ ฐิมาพร  เพชรแก้ว
                     </label>
                  </div>
               </div>
               <div class="col-6">
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox"   name="teacher[]" id="teacher2" value="2" {{(!is_null(Input::old('teacher')) && in_array("2",Input::old('teacher')))?'checked':''}}>
                     <label class="form-check-label" for="teacher2">
                        อาจารย์ ดร. กรัณรัตน์   ธรรมรักษ์ 
                     </label>
                  </div>
               </div>
               <div class="col-6">
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox"   name="teacher[]" id="teacher3" value="3" {{(!is_null(Input::old('teacher')) && in_array("3",Input::old('teacher')))?'checked':''}}>
                     <label class="form-check-label" for="teacher3">
                        ผู้ช่วยศาสตราจารย์ อุหมาด  หมัดอาด้ำ 
                     </label>
                  </div>
               </div>
               <div class="col-6">
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox"   name="teacher[]" id="teacher4" value="4" {{(!is_null(Input::old('teacher')) && in_array("4",Input::old('teacher')))?'checked':''}}>
                     <label class="form-check-label" for="teacher4">
                        อาจารย์ ดร. พุทธิพร  ธนธรรมเมธี
                     </label>
                  </div>
               </div>
               <div class="col-6">
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox"   name="teacher[]" id="teacher5" value="5" {{(!is_null(Input::old('teacher')) && in_array("5",Input::old('teacher')))?'checked':''}}>
                     <label class="form-check-label" for="teacher5">
                        ผู้ช่วยศาสตราจารย์ เยาวเรศ  ศิริสถิตย์กุล 
                     </label>
                  </div>
               </div>
            </div>
            <small id="emailHelp" class="form-text text-danger">{{$errors->first('teacher')}}</small>

            <br>
            <div class="form-group">
               <label for="name">สถานที่จัดกิจกรรม</label>
               <input type="text" class="form-control {{$errors->has('location') ? 'is-invalid' : ''}}" id="location" name="location" value="{{Input::old('location')}}" placeholder ="สถานที่จัดกิจกรรม" >
               <small id="emailHelp" class="form-text text-danger">{{$errors->first('location')}}</small>
            </div>
            
            <label for="name">นักศึกษาที่เข้าร่วม</label>
            <div class="row">
               <div class="col-6">
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox"  name="years[]" id="year1" value="1"  {{(!is_null(Input::old('years')) && in_array("1",Input::old('years')))?'checked':''}}>
                     <label class="form-check-label" for="year1">
                        นักศึกษาปีการศึกษา 2558
                     </label>
                  </div>
               </div>
               <div class="col-6">
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox"  name="years[]" id="year2" value="2" {{(!is_null(Input::old('years')) && in_array("2",Input::old('years')))?'checked':''}}>
                     <label class="form-check-label" for="year2">
                        นักศึกษาปีการศึกษา 2559
                     </label>
                  </div>
               </div>
               <div class="col-6">
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox"  name="years[]" id="year3" value="3" {{(!is_null(Input::old('years')) && in_array("3",Input::old('years')))?'checked':''}}>
                     <label class="form-check-label" for="year3">
                        นักศึกษาปีการศึกษา 2560
                     </label>
                  </div>
               </div>
               <div class="col-6">
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox"  name="years[]" id="year4" value="4" {{(!is_null(Input::old('years')) && in_array("4",Input::old('years')))?'checked':''}}>
                     <label class="form-check-label" for="year4">
                        นักศึกษาปีการศึกษา 2561
                     </label>
                  </div>
               </div>
               <div class="col-6">
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox"  name="years[]" id="year5" value="5" {{(!is_null(Input::old('years')) && in_array("5",Input::old('years')))?'checked':''}}>
                     <label class="form-check-label" for="year5">
                        นักศึกษาปีการศึกษาปีอื่นๆ
                     </label>
                  </div>
               </div>
            </div>
            <small id="emailHelp" class="form-text text-danger">{{$errors->first('years')}}</small>

            <br>
            <button type="submit" class="btn btn-success">บันทึก</button>
         </div>
      </div>
   </div>
</form>
<script type="text/javascript">
   $(function () {
         $('#timestart').datetimepicker({
            format: 'LT'
         });
         $('#daystart').datetimepicker({
            format: 'L'
         });
         $('#dayend').datetimepicker({
            format: 'L'
         });
         $('#timeend').datetimepicker({
            format: 'LT'
         });
   });
</script>
@stop