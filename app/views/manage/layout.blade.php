<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    </head>
    <body>
        <ul>
            <li><a href="{{url('/manage/book')}}"> manage book</a></li>
            <li><a href="{{url('/manage/user')}}">manage user</a></li>
        </ul>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>