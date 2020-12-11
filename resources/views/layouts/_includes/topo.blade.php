
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      
    <link rel="stylesheet" href="{{asset('css/home.css')}}" />
        <title>@yield('titulo')</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>

    <body>
        <header>
            <nav>
                <div class="nav-wrapper">
                  <a href="#!" class="brand-logo "><i  class="material-icons">account_box</i>Agenda </a>
                  <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                  <ul class="right hide-on-med-and-down">
                  <li><a href="{{route('site.login')}}">Login</a></li>
                    <li><a href="{{route('site.login.sair')}}">Sair</a></li>
                  </ul>
                </div>
              </nav>
            
              <ul class="sidenav blue darken-4" id="mobile-demo">
                <li><a href="{{route('site.login')}}">Login</a></li>
                <li><a href="{{route('site.login.sair')}}">Sair</a></li>
              </ul>

              @include('layouts._includes.modals')
        </header>
      