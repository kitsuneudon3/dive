<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @vite('resources/css/app.css')
    </head>
    <body>
        <h1>サイト名</h1>
        <h2>＞記事作成</h2>
        <article>
         <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="spot">
                <p>Spot</p>
                <input type="text" name="spot" placeholder="スポット名"/>
            </div>
            <div class="body">
                <p>コメント</p>
                <textarea name="post[body]" placeholder="コメント"></textarea>
            </div>
            
            <div class="image">
                <label for="image">画像登録</label>
                <input type="file" name="image">
            </div>

            
            <input type="submit" value="保存"/>
        </form>
           <div class="back">[<a href="/">back</a>]</div>
    </body>
    
        <div class="side">
            <div class="box">
              <p class='home'><a href='/'>ホーム</a></p>
              <p class='create'><a href='/mypage'>マイページ</a></p>
              <p class='create'><a href='/mylog'>マイログ</a></p>
            </div>
        </div>
          
        </article>    
    </body>