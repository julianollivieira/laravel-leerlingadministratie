<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LAS</title>
    </head>
    <body>
      <div id="app">
        <div class="container">
          <example-component></example-component>
          
          Laravel Build v{{ Illuminate\Foundation\Application::VERSION }}
        </div>
      </div>
      <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
