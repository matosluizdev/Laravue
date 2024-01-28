<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css" />

        <title>LaraLouis</title>
        @routes
        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body class="text-gray-800 bg-white dark:bg-slate-800 dark:text-gray-300">
        @inertia
    </body>
</html>
