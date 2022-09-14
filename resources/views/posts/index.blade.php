<x-app-layout>
    <x-slot name="header">
        <h2>Home</h2>
    </x-slot>    
        <form action="/posts/search" method="POST">
            @csrf
        <input type="search" placeholder="ユーザー名かスポット名を記述してください。" name="search" >        
        <button type="submit">検索</button>
        <button>
            <a href="/posts" class="text-white">クリア</a>
        </button>
        </form>
        
    <article>
    　　      <div class="content">
    　　          @foreach($posts as $post)
                    <div class="post">
                       <p class='spot'><a href="/spots/{{ $post->spot->id }}">{{ $post->spot->name }}</a></p>     
                       <p　class=image><a href="/posts/{{ $post->id }}">
                       <img src="{{'/storage/images/' . $post['image']}}" width='300px' height='240px'/></a>
                       </p>
                       <p><a href="/mypage/{{ $post->user->id }}">{{ $post->user->name }}</a></p>
                       <p class='body'>{{ $post->body }}</p>       
                    </div>
                @endforeach
            </div>
        
           
            <div class="side">
                <x-button class='create'><a href='posts/create'>作成</a>
                </x-button>
            
                <div class="box">
                    <p class='home'><a href='/posts'>ホーム</a></p>
                    <p class='create'><a href='/mypage/{{ Auth::user()->id }}'>マイページ</a></p>
                    <p class='create'><a href='/logs'>マイログ</a></p>
                </div>
            </div>
          
        </article>    
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        
</x-app-layout>