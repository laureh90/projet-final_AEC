<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Analytics --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L22R48CN76"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-L22R48CN76');
    </script>

    <title>{{ $titre ?? 'Kaloa | Hotels & Ressorts' }}</title>

    <link rel="stylesheet" href="{{ asset('css/css-home/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css-menu/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css-admin/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css-activities/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css-package/styles.css') }}">

    <link rel="stylesheet" href="{{ asset('css/css-confirmation-reservation/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carrousel/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css-news/styles.css') }}">

    </head>
<body>


    {{ $slot }}


    <script src="https://unpkg.com/vue@next"></script>
    <script src="js/nav_bar.js"></script>




</body>
</html>
