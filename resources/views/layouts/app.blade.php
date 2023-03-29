<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body>
  @include('components.header')

  <main>
    @yield('content')
  </main>


  @vite('resources/js/app.js')
</body>

</html>
