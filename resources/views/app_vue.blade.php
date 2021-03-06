<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link type="text/css" href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app"></div>
  <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>