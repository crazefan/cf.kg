<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>@yield('title') - cf.kg</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/main.css">
 

    @yield('headExtra')

  </head>

  <body>
    <div class="nav">
      <div class="container">
        <ul class="nav nav-pills pull-left">
          <li role="presentation"><a href="http://cf.kg/public/">Explore</a></li>
          <li role="presentation" class="active"><a href="/public/projects/add">Start</a></li>
        </ul>
        @if (!Auth::check())
          <ul class="nav nav-pills pull-right">
            <li><a href="http://cf.kg/public/users/register">Register</a></li>
            <li><a href="http://cf.kg/public/users/login">LogIn</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        @else
          <ul class="nav nav-pills pull-right">
           <li><a href="#"><strong>{{ Auth::user()->username }}</strong></a></li>
            <li><a href="#">Help</a></li>
            <li><a href="http://cf.kg/public/users/logout">Logout</a></li>
          </ul>
        @endif
      </div>
    </div>
@yield('content')
</body>
</html>