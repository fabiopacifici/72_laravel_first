<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

</head>

<body class="antialiased">

    <header>
        <nav class="nav justify-content-center">
            <a class="nav-link active" href="{{ route('home') }}">Home</a>
            <a class="nav-link" href="{{ route('about') }}">About</a>
        </nav>
    </header>

    <main>
        <h1>{{$page_title}} {{$class_number}}</h1>
    </main>

</body>

</html>
