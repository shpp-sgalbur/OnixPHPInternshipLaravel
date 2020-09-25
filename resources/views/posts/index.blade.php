<html>
  <head>
    <title>App Name - @yield('title')</title>
  </head>
  <body>
    @section('sidebar')
      Здесь будут отображаться все посты
    @endsection
    @show

    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
