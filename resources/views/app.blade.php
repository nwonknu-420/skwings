<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="" name="description">
        <meta content="" name="keywords">
        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
        <style>
            body {
                font-family: Poppins;
                margin: 0;
                background-color:#181818;
                color: #eee;
            }
            </style>
    </head>
    <body>
        @inertia
    </body>

    <script src="https://kit.fontawesome.com/900158d969.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

   
    </html>


