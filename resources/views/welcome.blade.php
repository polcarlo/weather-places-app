<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        <!-- Styles -->
       
    </head>
    <body>
        <div id="app">

            <main-app/>
        </div>
        <script src="{{ asset('js/app.js')}}"></script>
   
    </body>
</html>
