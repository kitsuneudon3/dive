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
        <h2>＞マイログ一覧</h2>
        <div class='list'>
            <p>2022/5/5</p>
            <p>富戸</p>
            <P>最大水深</P>
        
        </div>
    　　　　<div class="side">
            <p class='create'>[<a href='/posts/create'>作成</a>]</p>
            
            <div class="box">
              <p class='home'><a href='/'>ホーム</a></p>
              <p class='create'><a href='/mypage'>マイページ</a></p>
              <p class='create'><a href='/mylog'>マイログ</a></p>
            </div>
              
        </div>
          
        </article>    
    </body>