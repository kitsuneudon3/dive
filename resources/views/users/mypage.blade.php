<x-app-layout>
    <x-slot name="header">
        <h2>Mypage</h2>
    </x-slot>
    <div class=main>
        <div class=profile>
            <!--<p><img src="{{'/storage/images/animal_mark01_buta.png'}}" width='100px' height='100px'/></p>-->
            <p><img src="{{'/storage/images/' . $user->image}}" width='200px' height='200px'/></p>
            <p class=profile_name>{{ $user->name}}</p>
        </div>
            <h2>自己紹介</h2>
            <p>{{$user->body}}<p>
        
        @if($user->id == Auth::id())
            <p class="edit">[<a href="/mypage/{{ $user->id }}/edit">edit</a>]</p>    
        @endif
    
        <!--投稿-->
        <h1>＜投稿一覧＞</h1>
       
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