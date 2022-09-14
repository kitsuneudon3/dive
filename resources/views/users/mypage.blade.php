<x-app-layout>
    <x-slot name="header">
        <h2>Mypage</h2>
    </x-slot>
    <div class=main>
        <div class=profile>
            @if($user->image)
            <!--<p><img src="{{'/storage/images/animal_mark01_buta.png'}}" width='100px' height='100px'/></p>-->
            <p><img src="{{'/storage/images/' . $user->image}}" width='200px' height='200px'/></p>
            @else
            <p><img src="{{'/storage/images/animal_mark01_buta.png'}}" width='100px' height='100px'/></p>
            @endif
            <p class=profile_name>{{ $user->name}}</p>
        </div>
            <h2>自己紹介</h2>
            <p>{{ $user->body }}<p>
        
        @if($user->id == Auth::id())
            <p class="edit">[<a href="/mypage/{{ $user->id }}/edit">編集</a>]</p>
            <p class="edit">[<a href="/mypage/{{ $user->id }}/editUser">アカウント情報の編集</a>]</p>
            
        @endif
    
        <!--投稿-->
        <h1>＜投稿一覧＞</h1>
       @foreach($posts as $post)
        　<div class="post">
            <p class='spot'><a href="/spots/{{ $post->spot->id }}">{{ $post->spot->name }}</a></p>     
          　<p　class=image><a href="/posts/{{ $post->id }}"><img src="{{'/storage/images/' . $post['image']}}" width='300px' height='240px'/></a></p>
            <p class='body'>{{ $post->body }}</p>
        　</div>
    　　@endforeach

    </div>
    <div class=side>
        <x-button class='create'><a href='/posts/create'>作成</a></x-button>
        <div class="box">
            <p><a href='/posts'>ホーム</a></p>
            <p><a href='/mypage/{{ $user->id }}'>マイページ</a></p>
            <p><a href='/logs'>マイログ</a></p>
        </div>
    
    </div>
    　　
</x-app-layout>