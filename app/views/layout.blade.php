
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>@yield('title') - cf.kg</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

 
    <link rel="stylesheet" href="/public/css/bootstrap.css">
    <link rel="stylesheet" href="/public/css/main.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
    @yield('headExtra')

  </head>

  <body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="http://cf.kg/public/" class="navbar-brand" href="#"><img style="height: 25px; width: 157px;" src="/view/images/logo.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/public/projects/add">Start<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Explore</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Go</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        
        @if (!Auth::check())
        <li><a href="/public/users/login">Login</a></li>
        <li><a href="/public/users/register">Register</a></li>
        @else
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><strong>{{ Auth::user()->username }}</strong><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="http://cf.kg/public/users/logout">Logout</a></li>
          </ul>
        </li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
{{-- 
  <div class="nav-container">
    <div class="nav">
        <a class="navbar-brand" href="#">
          <img src="/view/images/logo.png">
        </a>
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
  </div> --}}
@yield('content')
</body>
</html>