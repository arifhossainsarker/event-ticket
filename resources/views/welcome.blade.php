<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>StylezWorld-Event Management</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
    margin: 0;
        padding: 0;
    }
    
    .home-img img {
        width: 100%;
        height: auto;
    }
    </style>

</head>

<body class="antialiased">
    <div class="home-img">
        <a href="https://stylezworld.com/">
            <img src="{{ asset('img/sw-layout.png') }}" alt="" />
        </a>
    </div>
</body>

</html>
