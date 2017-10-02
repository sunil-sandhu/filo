<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Filo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <link href="/css/app.css" rel="stylesheet">

    </head>
    <body>
       
        
        @include('layouts.nav')
        
        
        @yield('content')

        
        @include('layouts.footer')
        
        
    </body>
</html>
