<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eagle Financial Services</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    
</head>
<body>
  <!-- <nav class="navbar navbar-default">
  <div class="container-fluid"> -->
    <!-- Brand and toggle get grouped for better mobile display 
    <!-- <nav class="navbar navbar-default">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{url('/')}}">Home</a> -->
               <!-- <a class="navbar-brand" href="{{action('CustomerController@index')}}">Customer</a>
               <a class="navbar-brand" href="{{action('StockController@index')}}">Stocks</a>
               <a class="navbar-brand" href="{{ action('InvestmentController@index')}}">Investment</a>
 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <!-- +
     -->
     

   <!--  <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
        
        <li class="dropdown">
          <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{action('CustomerController@index')}}">Customers</a></li>
            <li><a href="#">Categories</a></li>
            <li><a href="#">Tags</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
          </ul>
        </li>
        
        @else
        <br>
          <a href="{{ route('login') }}" class="btn btn-default">Login</a>

        @endif

      </ul>
    </div><!-- /.navbar-collapse -->
  <!-- </div>/.container-fluid
</nav> -->
      
       
</div>
<div class="container">
    @yield('content')
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
