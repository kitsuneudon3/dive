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
        <h2>＞富戸</h2>
        <p class='serch'>
        <form action="https://586b2d2413c24a7bb3586e281080a9c6.vfs.cloud9.ap-northeast-1.amazonaws.com/">
 　　　　　　 <p>ユーザー名かスポット名を入力してください。</p>
  　　　　　 <input type="search" name="search" placeholder="キーワードを入力">
   　　　 　<input type="submit" name="submit" value="検索">
　　　　</p>
　　　　</form>
        
        <article>
    　　<div class="content">       
    　　  <div class="post">
                <p class='spot'>富戸</p>
                <P　class=image>写真</P>
                <p class='user'>小林</p>
                <p class='body'>とても楽しかったです。</p>                
          </div>
          <div class="post">
                <p class='spot'>富戸</p>
                <P　class=image>写真</P>
                <p class='user'>小林</p>
                <p class='body'>とても楽しかったです。</p>                
          </div>
        </div>
           
          <div class="post">
                <p class='spot'>富戸</p>
                <P　class=image>写真</P>
                <p class='user'>小林</p>
                <p class='body'>とても楽しかったです。</p>                
          </div>
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