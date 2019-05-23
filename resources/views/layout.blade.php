<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Laravel Learn')</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Styles -->
    </head>
    <body>
        <nav>
          <div class="nav-wrapper">
            <div class="container">
              <a href="/" class="brand-logo">Laravel</a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/projects">Projects</a></li>
                <li><a href="/projects/create">Create</a></li>
              </ul>
            </div>
          </div>
        </nav>
      <div class="container">
          @yield('content')
      </div>
      <footer class="page-footer">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Hifounder</h5>
              <p class="grey-text text-lighten-4">Laravel 練習</p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Links</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="/projects">Projects</a></li>
                <li><a class="grey-text text-lighten-3" href="/projects/create">Create</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          © 2019 Hifounder
          </div>
        </div>
      </footer>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
