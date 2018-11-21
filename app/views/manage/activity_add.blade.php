@extends('manage.layout')
@section('title')
test
@stop
@section('content')
<form action="/swe-207/manage/activityaddpost" class="form-horizontal" autocomplete="off" enctype="multipart/form-data" method="post">
   <div class="container">
      <ul class="errorMessages"></ul>
      <div class="row">
         <div class="col-md-3"></div>
         <div class="col-md-6" style="margin-top:50px">
            <h2>สร้างข้อมูลกิจกรรม</h2>
            <hr>
         </div>
      </div>
      <div class="row">
         <div class="col-md-3 field-label-responsive">         
            <label for="name">ชื่อกิจกรรม</label>           
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-laptop"></i></div>
                  <input type="text" id="name" name="name" class="form-control" placeholder="ชื่อกิจกรรม" required="" autofocus="">     
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="form-control-feedback">
               <span class="text-danger align-middle">
                  <!-- Put name validation error messages here -->    
               </span>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-3 field-label-responsive">         
            <label for="name">ประเภทกิจกรรม</label>    
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-laptop"></i></div>
                  <select id="type_id" name="type_id" class="form-control">
                     <option value="1">กิจกรรมเสริมหลักสูตร</option>
                     <option value="2">กิจกรรมรายวิชา</option>
                     <option value="3">กิจกรรมนักศึกษา</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="form-control-feedback">
               <span class="text-danger align-middle">
                  <!-- Put name validation error messages here -->  
               </span>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-3 field-label-responsive">     
            <label for="name">รายละเอียด</label>                      
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <div class="input-group-addon" style="width: 2.6rem">
                     <i class="fa fa-comment"></i>
                  </div>
                  <textarea id="activitydetail" name="activitydetail" class="form-control" placeholder="รายละเอียด" required=""></textarea>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="form-control-feedback">                 
               <span class="text-danger align-middle">   
               </span>           
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-3 field-label-responsive">  
            <label for="date">วันเริ่ม-สิ้นสุดกิจกรรม วัน/เดือน/ปี เวลา</label> 
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-calendar"></i></div>
                  <input type="text" id="Yearstart" name="Yearstart" class="form-control" required="">  
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="form-control-feedback">
               <span class="text-danger align-middle">
                  <!-- Put e-mail validation error messages here -->                   
               </span>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-3 field-label-responsive" style="margin-top:3px">   
            <label for="password">ภาคการศึกษา</label>     
         </div>
         <div class="col-md-6">
            <div class="form-inline">
               <div class="input-group mb-2 mr-sm-2 mb-sm-0" style="margin-top:5px">
                  <div class="form-group">
                     <select id="semester" name="semester" class="form-control">
                        <option value="1">ภาคการศึกษาที่ 1</option>
                        <option value="2">ภาคการศึกษาที่ 2</option>
                        <option value="3">ภาคการศึกษาที่ 3</option>
                     </select>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                     <label for="password">ปีการศึกษา</label>      
                     &nbsp;&nbsp;         
                     <input type="text" id="Year" name="Year" class="form-control" placeholder="ปีการศึกษา" required=""> 
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-3 field-label-responsive" style="margin-top:17px">  
            <label for="file">อาจารย์ผู้รับผิดชอบ</label>  
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <div class="input-group mb-2 mr-sm-2 mb-sm-0" style="margin-top:15px">
                  <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                  <select id="teacher_id" name="teacher_id" class="form-control">
                     <option value="84">ผู้ช่วยศาสตราจารย์ ฐิมาพร  เพชรแก้ว</option>
                     <option value="85">ผู้ช่วยศาสตราจารย์ เยาวเรศ  ศิริสถิตย์กุล</option>
                     <option value="86">ผู้ช่วยศาสตราจารย์ อุหมาด  หมัดอาด้ำ</option>
                     <
                     option value="87">อาจารย์ ดร. พุทธิพร  ธนธรรมเมธี</option>
                     <option value="88">อาจารย์ ศิริภิญโญ  จันทมุณี</option>
                     <option value="89">อาจารย์ ดร. กรัณรัตน์  ธรรมรักษ์</option>
                     <option value="90">อาจารย์ ดร. จิตติมา  ศังขมณี</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="form-control-feedback">
               <span class="text-danger align-middle">
                  <!-- Put e-mail validation error messages here -->       
               </span>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-3 field-label-responsive" style="margin-top:17px">  
            <label for="file">สถานที่จัดกิจกรรม</label>   
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <div class="input-group mb-2 mr-sm-2 mb-sm-0" style="margin-top:15px">
                  <div class="input-group-addon" style="width: 2.6rem">
                     <i class="fa fa-home"></i>
                  </div>
                  <select id="location_id" name="location_id" class="form-control">
                     <option value="2">อาคารเรียนรวม7  ( บริเวณด้านหลังอาคารเรียนรวม7 )</option>
                     <option value="3">โรงอาหาร4  ( บริเวณด้านในโรงอาหาร4 )</option>
                     <option value="4">มหาวิทยาลัยสงขลานครินทร์  ( 15 ถนน กาญจนวนิช ซอย 7 ตำบล คอหงส์ อำเภอ หาดใหญ่ สงขลา 90110 )</option>
                     <option value="5">มหาวิทยาลัยทักษิณวิทยาเขตพัทลุง  ( 222 หมู่ ตำบล บ้านพร้าว อำเภอ ป่าพะยอม พัทลุง 93210 )</option>
                     <option value="6">ทิพย์บุรีรีสอร์ท  ( 330/7 หาดหินงาม หมู่ 3 ต.สิชล อ.สิชลจ.นครศรีธรรมราช  80120 )</option>
                     <option value="7">พูลสุขรีสอร์ท  ( 58 หมู่1 ตำบลท่าขึ้น อำเภอท่าศาลา จังหวัดนครศรีธรรมราช 80160 )</option>
                     <option value="8">อาคารเครื่องมือวิทยาศาสตร์  ( ห้องปฏิบัติการคอมพิวเตอร์2  )</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="form-control-feedback">
               <span class="text-danger align-middle">
                  <!-- Put e-mail validation error messages here -->     
               </span>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-3 field-label-responsive" style="margin-top:17px">   
            <label for="file">รูปกิจกรรม</label>   
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <div class="input-group mb-2 mr-sm-2 mb-sm-0" style="margin-top:15px">
                  <div class="input-group-addon" style="width: 2.6rem">
                     <i class="fa fa-picture-o"></i>
                  </div>
                  <input type="file" id="file" name="file" class="form-control" placeholder="file" accept="image/png, image/jpeg, image/gif">                   
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="form-control-feedback">
               <span class="text-danger align-middle">
                  <!-- Put e-mail validation error messages here -->        
               </span>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-3 field-label-responsive">   
            <label for="password">ปีการศึกษาที่เข้าร่วม</label> 
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <div class="input-group mb-2 mr-sm-2 mb-sm-0" style="margin-top:8px">
                  <div class="form-group ">     
                     <label class="form-check-label required">   
                     <input type="checkbox" class="form-check-input" name="years[]" id="optionsRadios1" value="2559">                                นักศึกษาปีการศึกษา 2559                            </label>                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                
                     <label class="form-check-label required">                              
                     <input type="checkbox" class="form-check-input" name="years[]" id="optionsRadios1" value="2558"> 
                     นักศึกษาปีการศึกษา 2558                            </label>    
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                     <label class="form-check-label required">                           
                     <input type="checkbox" class="form-check-input" name="years[]" id="optionsRadios1" value="2557">  
                     นักศึกษาปีการศึกษา 2557                            </label>           
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           
                     <label class="form-check-label required">      
                     <input type="checkbox" class="form-check-input" name="years[]" id="optionsRadios1" value="2556">
                     นักศึกษาปีการศึกษา 2556                            </label>      
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-3"></div>
         <div class="col-md-6">             
            <input type="submit" value="บันทึก" class="btn btn-success">       
         </div>
      </div>
   </div>
</form>
@stop