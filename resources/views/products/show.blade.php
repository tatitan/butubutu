<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Butubutu</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <h1 class=title>{{ $product->title }}</h1>
        <div class='content'>
                <p class='picture'>"商品の写真(1枚目)"</p>
                <p class='picture'>"商品の写真(2枚目)"</p>
                <p class='picture'>"商品の写真(3枚目)"</p>
                <p class='picture'>"商品の写真(4枚目)"</p>
                <p class='picture'>"商品の写真(5枚目)"</p>
                <h2 class='title'>{{ $product->title }}</h2>
                <p class='description'>{{ $products->description }}</p>
                <p class='category'>カテゴリー： . カテゴリー</p>
                <p class='updated_at'>{{ $product->updated_at }}</p>
        </div>
        <div class='back'>[<a href='/'>back</a>]</div>
    </body>
</html>
