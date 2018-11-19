<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    </head>
    <body>
   
   <!-- Image and text -->

    <nav class="navbar navbar-expand-lg navbar-light "  style="background-color: #e3f2fd;">
        <a class="navbar-brand mb-0 h1" href="#">Software En</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">หน้าหลัก <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">ข้อมูลนักศึกษา</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   จัดการกิจกรรม
                  </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">สร้างกิจกรรม</a>
                  <a class="dropdown-item" href="#">กิจกรรมทั้งหมด</a>
                  <a class="dropdown-item" href="#">สรุปการเข้าร่วมกิจกรรม</a>
                </div>
                </li>
            </ul>
        </div>
    </nav>    
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>