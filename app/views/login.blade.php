<html>
  <head>

    <link rel="stylesheet" href="{{asset('assets/css/login/login.css')}}">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
body{
    background-color: #ffffff;
}
</style>
  </head>
<body id="LoginForm">
<div class="container">
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h3>Login</h3>
   <p>Please enter your username and password</p>
   </div>
    <!-- <form id="Login"> -->
    <form action="{{url('/manage/activity/add')}}" method="get">

        <div class="form-group">


            <input type="email" class="form-control" id="inputUsername" placeholder="Username">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" placeholder="Password">

        </div>
        <div class="forgot">
        <a href="reset.html">Forgot password?</a>
</div>
        <button type="submit" class="btn btn-primary">Login</button>

    </form>
    </div>
</div></div></div>


</body>
</html>
