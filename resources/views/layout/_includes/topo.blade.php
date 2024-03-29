<!DOCTYPE html>
<html>
  <head>
    <title>@yield('titulo')</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!--<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/> -->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
    <header>
      <nav>
        <div class="nav-wrapper green darken-4">
          <a href="#!" class="brand-logo right">Curso de Laravel</a>
          <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="left hide-on-med-and-down">
            <li><a href="/">HOME</a></li>

            @if (Auth::guest())
              <li><a href="{{route('site.login')}}">Login</a></li>
            @else
              <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
              <li><a href="#">{{ Auth::user()->name }}</a></li>
              <li><a href="{{ route('site.login.sair') }}">Sair</a></li>
            @endif

          </ul>
        </div>
      </nav>

      <ul class="sidenav" id="mobile">
        <li><a href="/">HOME</a></li>
        @if (Auth::guest())
          <li><a href="{{route('site.login')}}">Login</a></li>
        @else
          <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
          <li><a href="#">{{ Auth::user()->name }}</a></li>
          <li><a href="{{ route('site.login.sair') }}">Sair</a></li>
        @endif
      </ul>
    </header>
