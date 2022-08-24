<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Butubutu</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <h1 class='product_title'>{{ $product->title }}</h1>
        <p class='edit'>[<a href="/products/{{ $product->id }}/edit">edit</a>]</p>
        <form action="/products/{{ $product->id }}" id="form_delete" method="post" style="desplay:inline">
            @csrf
            @method('DELETE')
            <input type="submit" style="display:none">
            <p class='delete'>[<span onclick="return deleteProduct(this);">delete</span>]</p>
        </form>
        <div class='content'>
            <p class='picture'>"商品の写真(1枚目)"</p>
            <p class='picture'>"商品の写真(2枚目)"</p>
            <p class='picture'>"商品の写真(3枚目)"</p>
            <p class='picture'>"商品の写真(4枚目)"</p>
            <p class='picture'>"商品の写真(5枚目)"</p>
            <h2 class='title'>{{ $product->title }}</h2>
            <p class='description'>{{ $product->description }}</p>
            <p class='category'><a href="/categories/{{ $product->category->id }}"></a>カテゴリー：{{ $product->category->name }}</a></p>
            <p class='updated_at'>{{ $product->updated_at }}</p>
        </div>
        <div class='back'>[<a href='/'>back</a>]</div>
        <script>
            function deleteProduct(e){
                'use strict';
                if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
    </body>
</html>
