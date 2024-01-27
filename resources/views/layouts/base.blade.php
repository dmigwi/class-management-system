<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>
        <link rel="icon" type="image/x-icon" href="/images/cms.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
       
    </head> 
    <body @if(\Request::is('/'))  class="bg-image bg-clip-content" @endif>
        <div class="relative py-px">
            <div class="container relative m-auto px-4 md:px-12 xl:px-40">
                <img src="images/cms.png" loading="lazy" class="ml-4 w-40" alt="Class Management System logo" />
                @yield('content')
                @show
            </div>
        </div>
    </body>

    {{-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script> --}}
        <!-- Include the Tailwind JS file -->
        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- <script src="{{ URL::asset('./js/app.js') }} "></script> --}}
</html>
