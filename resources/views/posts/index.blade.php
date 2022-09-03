<x-app-layout>
    <x-slot name="header">
        <h2>Home</h2>
    </x-slot>    
        <form action="https://586b2d2413c24a7bb3586e281080a9c6.vfs.cloud9.ap-northeast-1.amazonaws.com/">
 　　　　　　 <p>ユーザー名かスポット名を入力してください。</p>
  　　　　　 <input type="search" name="search" placeholder="キーワードを入力">
   　　　 　<input type="submit" name="submit" value="検索">
　　　　</form>
        
        <p id="txt"></p>
        
　　　　<article>
    　　      <div class="content">
    　　      @foreach ($posts as $post)
                <div class="post">
                <p class='spot'><a href="/spots/{{ $post->spot->id }}">{{ $post->spot->name }}</a></p>     
                <p　class=image>
                    <a href="/posts/{{ $post->id }}">
                        <img src="{{ '/storage/images/' . $post->image }}" >
                    </a>
                </p>
                <p class='user'>{{ $post->user->name }}</p>
                <p class='body'>{{ $post->body }}</p>                
        
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
    　　　　　　　　　　　　　　@csrf
    　　　　　　　　　　　　@method('DELETE')
    　               <button type="submit", id="btn" >delete</button>
　　　　　　　
　　　　　　     </form>
　　　　　       </div>
            @endforeach
          </div>
        
           
          <div class="side">
              
             <x-button class='create'><a href='posts/create'>作成</a>
              </x-button>
            
              <div class="box">
                 <p class='home'><a href='/posts'>ホーム</a></p>
                 <p class='create'><a href='/mypage'>マイページ</a></p>
                 <p class='create'><a href='/mylog'>マイログ</a></p>
              </div>
          </div>
          
        </article>    
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        
</x-app-layout>