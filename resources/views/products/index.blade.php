<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Butubutu</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <h1>出品一覧</h1>
        <div class='products'>
            @foreach($products as $product)
                <div class='product'>
                   <h2 class='title'>{{ $product->title }}</h2>
                   <p class='picture'>"商品の写真"</p>
                </div>
            @endforeach
        </div>
    </body>
</html>
