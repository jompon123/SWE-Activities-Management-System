@extends('manage.layout')
@section('title')
test
@stop
@section('content')

<style>
.topping{
   text-align: right;
}
.year{
  
}
</style>

<form class="form-horizontal" autocomplete="off" enctype="multipart/form-data" method="post">
   <div class="container">
      <ul class="errorMessages"></ul>
      <div class="row">
         <div class="col-md-4"></div>
         <div class="col-md-6" style="margin-top:50px">
            <h2>สร้างข้อมูลกิจกรรม</h2>
            <hr>
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
         <div class="topping col-md-4 field-label-responsive" style="margin-top:3px">         
            <label for="name">ชื่อกิจกรรม</label>           
         </div>
         <div class="col-md-6">
             <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-laptop"></i></span></div>
               <input type="text" id="activityName" name="activityName" class="form-control" placeholder="ชื่อกิจกรรม" required="" autofocus="" aria-describedby="basic-addon1">
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
         <div class="topping col-md-4 field-label-responsive" style="margin-top:3px">     
            <label for="name">รายละเอียด</label>                      
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <div class="input-group">
                   <div class="input-group-prepend">
                     <span class="input-group-text"><i class="fa fa-comment"></i></span>
                  </div>
                     <textarea   id="activitydetail" name="activitydetail"  class="form-control" aria-label="With textarea" placeholder="รายละเอียด" required=""></textarea>
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
         <div class="topping col-md-4 field-label-responsive" style="margin-top:10px">   
            <label for="password">ช่วงในการจัดกิจกรรม</label> 
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <div class="input-group " style="margin-top:10px">
                  <div class="form-group "> 
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
                     <label class="form-check-label required">   
                     <input type="radio" class="form-check-input" name="range[]" id="optionsRadios1" value="morning">      
                     ช่วงเช้า      
                     </label>       
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                
                     <label class="form-check-label required">                              
                     <input type="radio" class="form-check-input" name="range[]" id="optionsRadios1" value="after"> 
                     ช่วงบ่าย
                     </label>       
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="topping col-md-4 field-label-responsive" style="margin-top:3px">  
            <label for="date">วันเริ่ม-สิ้นสุดกิจกรรม วัน/เดือน/ปี เวลา</label> 
         </div>
         <div class="col-md-6">
            <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span></div>
                <input type="text" id="Yearstart" name="Yearstart" class="form-control" required="" aria-describedby="basic-addon1">
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
         <div class="topping col-md-4 field-label-responsive" style="margin-top:10px">   
            <label for="password">ภาคการศึกษา</label>     
         </div>
         <div class="col-md-6">
            <div class="form-inline">
               <div class="input-group mb-2 mr-sm-2 mb-sm-0" style="margin-top:5px">
                  <div class="form-group">
                     <select id="term" name="term" class="form-control">
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
         <div class="topping col-md-4 field-label-responsive" style="margin-top:25px">   
            <label for="password">อาจารย์ผู้รับผิดชอบ</label> 
         </div>
         <div class="col-md-6">
            <div class="year form-group">
               <div class="input-group mb-2 mr-sm-2 mb-sm-0" style="margin-top:20px">
                  <div class="form-group "> 
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                     <label class="form-check-label required">   
                     <input type="checkbox" class="form-check-input" name="teacher[]" id="optionsRadios1" value="2558">      
                     ผู้ช่วยศาสตราจารย์ ฐิมาพร  เพชรแก้ว        
                     </label>       
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                       
                     <label class="form-check-label required">                              
                     <input type="checkbox" class="form-check-input" name="teacher[]" id="optionsRadios1" value="2559"> 
                     อาจารย์ ดร. กรัณรัตน์   ธรรมรักษ์ 
                     </label>    
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <label class="form-check-label required">                           
                     <input type="checkbox" class="form-check-input" name="teacher[]" id="optionsRadios1" value="2560">  
                     ผู้ช่วยศาสตราจารย์ อุหมาด  หมัดอาด้ำ                            
                     </label>           
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         
                     <label class="form-check-label required">      
                     <input type="checkbox" class="form-check-input" name="teacher[]" id="optionsRadios1" value="2561">
                     อาจารย์ ดร. พุทธิพร  ธนธรรมเมธี                            
                     </label>      
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <label class="form-check-label required">      
                     <input type="checkbox" class="form-check-input" name="teacher[]" id="optionsRadios1" value="other">
                     ผู้ช่วยศาสตราจารย์ เยาวเรศ  ศิริสถิตย์กุล                          
                     </label>   
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="topping col-md-4 field-label-responsive" style="margin-top:10px">  
            <label for="file">สถานที่จัดกิจกรรม</label>   
         </div>
         <div class="col-md-6">
            <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-home"></i></span></div>
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
         <div class="topping col-md-4 field-label-responsive" style="margin-top:10px">   
            <label for="file">รูปกิจกรรม</label>   
         </div>
         <div class="col-md-6">
            <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend" >
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-image"></i></span></div>
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
         <div class="topping col-md-4 field-label-responsive" style="margin-top:20px">   
            <label for="password">ปีการศึกษาที่เข้าร่วม</label> 
         </div>
         <div class="col-md-6">
            <div class="year form-group">
               <div class="input-group mb-2 mr-sm-2 mb-sm-0" style="margin-top:20px">
                  <div class="form-group ">     
                     <label class="form-check-label required">   
                     <input type="checkbox" class="form-check-input" name="years[]" id="optionsRadios1" value="2558">      
                     นักศึกษาปีการศึกษา 2558        
                     </label>       
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                
                     <label class="form-check-label required">                              
                     <input type="checkbox" class="form-check-input" name="years[]" id="optionsRadios1" value="2559"> 
                     นักศึกษาปีการศึกษา 2559
                     </label>    
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                     <label class="form-check-label required">                           
                     <input type="checkbox" class="form-check-input" name="years[]" id="optionsRadios1" value="2560">  
                     นักศึกษาปีการศึกษา 2560                            
                     </label>           
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
                     <label class="form-check-label required">      
                     <input type="checkbox" class="form-check-input" name="years[]" id="optionsRadios1" value="2561">
                     นักศึกษาปีการศึกษา 2561                            
                     </label>    
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <label class="form-check-label required">      
                     <input type="checkbox" class="form-check-input" name="years[]" id="optionsRadios1" value="other">
                     นักศึกษาปีการศึกษาอื่นๆ                           
                     </label>   
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4"></div>
         <div class="col-md-6">             
            <input type="submit" value="บันทึก" class="btn btn-success">       
         </div>
      </div>
   </div>
</form>
@stop