<x-app-layout>
    <x-slot name="header">
        <h2>詳細画面</h2>
    </x-slot>
        
       <article>
    　　<div class="content">       
    　　     <div class="post">
                <p class='user'>{{$post->user->name}}</p>
                <p class='spot'>{{$post->spot->name}}</p>
                <p class='image'><img src="{{ '/storage/images/' . $post->image }}" ></p>
                <p class='body'>{{$post->body}}</p>
                <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
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
             
             <x-button class='create'><a href='/posts/create'>作成</a>
              </x-button>
            
            <div class="box">
              <p class='home'><a href='/posts'>ホーム</a></p>
              <p class='create'><a href='/mypage'>マイページ</a></p>
              <p class='create'><a href='/mylog'>マイログ</a></p>
            </div>
        </div>
          
       </article>    
    </x-app-layout>