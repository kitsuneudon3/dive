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
        <h2>＞詳細画面</h2>
        
       <article>
    　　<div class="content">       
    　　     <div class="post">
                <p class='user'>{{$post->user->name}}</p>
                <p class='spot'>{{$post->spot->name}}</p>
                <P　class=image>{{$post->image}}</P>
                <p class='body'>{{$post->body}}</p> 
                <button type="button">いいね！</button>
                 <div class="commentArea">        
                     <form action="/posts" method="POST">
                      @csrf
                     <p>コメント</p>
                     <input type="text" name=" " placeholder="コメント"/>
                     <input type="submit" value="保存"/>
                     </form>
                 </div>
                 
                 <div class=commentList>
                   <p>コメント一覧</p>
                   <p>kobayashi</p>
                   <p>あああああああああ</p>
　　　　         </div>
           </div>
        </div>
         
        <div class="side">
            <p class='create'>[<a href='/create'>作成</a>]</p>
            
            <div class="box">
              <p class='home'><a href='/'>ホーム</a></p>
              <p class='create'><a href='/mypage'>マイページ</a></p>
              <p class='create'><a href='/mylog'>マイログ</a></p>
            </div>
        </div>
          
       </article>    
    </body>