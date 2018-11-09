<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @section('styles')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}"/>

    @show

    @section('scripts')
    @show

    <title>Cloud9</title>
</head>
<body>

  <div class="container">
            <nav>
                  <input type="checkbox" id="nav" class="hidden">
                  <label for="nav" class="nav-btn">
                        <i></i>
                        <i></i>
                        <i></i>
                  </label>
                  <div class="logo">
                        <a href="{{ route('home')}}">Cloud9</a>
                  </div>
                  <div class="nav-wrapper">
                        <ul>
                              <li><a href="{{ route('home')}}">Home</a></li>
                              <li><a href="{{ route('nieuws')}}">Nieuws</a></li>
                              <li><a href="{{ route('team')}}">Team</a></li>
                              <li><a href="https://www.twitch.tv/cloud9" target="_blank">Stream</a></li>
                              <li><a href="{{ route('registration.form')}}">Contact</a></li>
                        </ul>
                  </div>
            </nav>
      </div>

<div class="container">
    <header>
       <h1 class="pagetitle">@section('pagetitle')
           Cloud9
           @show
      </h1>    
        <h2 class="caps txt-red">@yield('page_title')</h2>
    </header>
    @section('content') 
    @show    
   
    <main>
 
    </main>
    @section('footer')
        <footer>
            <div class="row">
               <a href="{{ route('home')}}"> <div class="col-xs-12 col-sm-6 col-md-2">Home</div></a>
               <a href="{{ route('nieuws')}}"> <div class="col-xs-12 col-sm-6 col-md-2">Nieuws</div></a>
               <a href="{{ route('team')}}"> <div class="col-xs-12 col-sm-6 col-md-2">Team</div></a>
               <a href="https://www.twitch.tv/cloud9" target="_blank"> <div class="col-xs-12 col-sm-6 col-md-2">Stream</div></a>
               <a href="{{ route('registration.form')}}"><div class="col-xs-12 col-sm-12 col-md-2">Contact</div></a>
            </div>
        </footer>
    @show
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
