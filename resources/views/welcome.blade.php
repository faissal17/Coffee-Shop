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
        <header>
            <div class="logo">
                <a href="#">Coffee <span>Heaven</span></a>
            </div>

            <nav>
                <ul>
                    <li><a href="{{route('login')}}">Login</a></li>
                </ul>
            </nav>
        </header>

        <div class="content">
            <h1>Coffee <span>Heaven</span></h1>
            <p>Welcome to Coffee Haven, the ultimate destination for coffee lovers! Our cozy, inviting space is the perfect place to relax, unwind, and enjoy a delicious cup of
                coffee made from the finest beans from around the world. Whether you're in the mood for a classic espresso, a rich cappuccino, or a sweet latte, our skilled baristas
                are here to craft the perfect drink just for you. Our menu also features a variety of teas, pastries, and light bites to satisfy your cravings. So come on in, grab a seat,
                 and let us treat you to an exceptional coffee experience that you won't forget. We can't wait to see you!</p>
        </div>
        <div class="shop" id="shop">
            <div class="shop-header">
                <h2>Coffee Heaven Drinks</h2>
            </div>
            <div class="shop-box">
                @foreach($type as $meal)
                <div class="item-1">
                    <div class="card">
                        <div class="card-image">
                            <img src="/images/{{$meal['image']}}">
                        </div>
                        <div class="card-body">
                            <label class="cash">{{$meal['price']}}DH</label>
                            <h3>{{$meal['name']}}</h3>
                            <label>{{$meal['description']}}</label>
                        </div>
                    </div>
                </div>
                @endforeach
           </div>
        </div>
    </body>
</html>
