<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Coffee shop</title>
        <link rel="stylesheet" href="/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <div class="content">
            <div class="nav-bar">
                <h1 class="title">Coffee<span>Shop</span></h1>
                <ul class="menu">
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
            <div class="home">
                <h1 class="title-1">Good <span>Coffee</span> always find a way to you</h1>
                <p>We provide high Quality in Coffee and food</p>
            </div>
        </div>
    </body>
</html>
