<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Butubutu</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <h1>商品登録</h1>
        <form action="/products/{{ $product->id }}" method="POST">
            {{ csrf_field() }}
            @method('PUT')
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="product[title]" placeholder="タイトル" value="{{ $product->title }}"/>
                <p class="title_error" style="color:red">{{ $errors->first('product.title') }}</p>
            </div>
            <div class='description'>
                <h2>Description</h2>
                <textarea type="text" name="product[description]" placeholder="説明文" >{{ $product->description }}</textarea>
                <p class="description_error" style="color:red">{{ $errors->first('product.description') }}</p>
            </div>
            <div class='id'>
                <h2>出品者IDを登録（仮）</h2>
                <input type="number" name="product[seller_id]" placeholder="user_id"/>
                //user_idを登録するように変更しないと
                <h2>カテゴリーIDを登録（仮）</h2>
                <input type="number" name="product[category_id]" placeholder="category_id"/>
                //category_idを登録するように変更しないと
            </div>
            <input type="submit" value="update"/>
        </form>
        
        <div class='back'>[<a href='/products/{{ $product->id }}'>back</a>]</div>
    </body>
</html>
