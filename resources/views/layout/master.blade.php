<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('public/css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('public/css/login.css')}}">
        

        <title>KIK</title>

      @include('inc/navbar')
       
        <div class="container">

        	@yield('content')

    	</div>
    </body>
</html>
