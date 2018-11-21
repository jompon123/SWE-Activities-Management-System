@extends('manage.layout')
@section('title')
    test
@stop

@section('content')
<form action="{{url('manage/user/add')}}" method="post" class="form-horizontal" autocomplete="off">
    <div class="container">
      <ul class="errorMessages"></ul>
      <div class="row">
         <div class="col-md-3"></div>
         <div class="col-md-6" style="margin-top:50px">
            <h2>เพิ่มนักศึกษา</h2>
            <hr>
         </div>
      </div>
      <div class="row">
         <div class="col-md-3 field-label-responsive">         
            <label for="name">ชื่อ</label>           
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-laptop"></i></div>
                  <input type="text" id="firstname" name="firstname" class="form-control" placeholder="ชื่อ" required="" autofocus="">     
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
            <label for="name">นามสกุล</label>           
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-laptop"></i></div>
                  <input type="text" id="lastname" name="lastname" class="form-control" placeholder="นามสกุล" required="" autofocus="">     
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
            <label for="date">รหัสนักศึกษา</label> 
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-calendar"></i></div>
                  <input type="text" id="student_id" name="student_id" class="form-control" placeholder="รหัสนักศึกษา" required="" autofocus="">  
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
            <label for="date">รหัสผ่านใหม่</label> 
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-calendar"></i></div>
                  <input type="text" id="password" name="password" class="form-control" placeholder="รหัสผ่านใหม่" required="" autofocus="">  
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
         <div class="col-md-3"></div>
         <div class="col-md-6">             
            <input type="submit" value="บันทึก" class="btn btn-success">       
         </div>
      </div>
   </div>
</form>
@stop
