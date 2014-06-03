<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>SKLaravel</title>

    <!-- Bootstrap CSS -->
    {{HTML::style('css/bootstrap.min.css')}}

    <!-- Font Awesome CSS -->
    {{HTML::style('css/font-awesome.min.css')}}
    
    <!-- Custom style -->
    {{HTML::style('css/custom.css')}}

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css"></style></head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{URL::route('home')}}">
            <i class="fa fa-lg fa-pied-piper-alt"></i> EASHL</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{URL::route('home')}}">Home</a></li>
            <li><a href="{{URL::route('store')}}">Store</a></li>
           
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
            <li><a href="{{URL::route('dashboard.team')}}"><i class="fa fa-group"></i> Team</a></li>
            <li><a href="#"><i class="fa fa-database"></i> {{ Auth::user()->coins }}</a></li>
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->email }} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  
                  <li><a href="{{URL::route('logout')}}"><i class="fa fa-sign-out"></i>Logout</a></li>
               
                </ul>
              </li>
            @else
              <li><a href="{{URL::route('login')}}">Login</a></li>
              <li><a href="{{URL::route('signup')}}">Sign up</a></li>
            @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

     @yield('content')

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    {{HTML::script('js/bootstrap.min.js')}}
  

</body></html>