<x-app-layout>
    <x-slot name="header">
        <h2>Mypage</h2>
    </x-slot>
    
    <div class=profile>
       <!--<p><img src="{{'/storage/images/animal_mark01_buta.png'}}" width='100px' height='100px'/></p>-->
       <p><img src="{{'/storage/images/' . $post_comment->user->image}}" width='50px' height='50px'/></p>
       <p class=profile_name>{{$user->name}}</p>
    </div>
       <h2>自己紹介</h2>
       <p>{{$user->body}}<p>
        
    <!--投稿-->
    <h2>投稿一覧</h2>
    
    <!--@foreach($posts as $post)-->
        <!--<div class="post">-->
        <!--    <p class='spot'><a href="/spots/{{ $post->spot->id }}">{{ $post->spot->name }}</a></p>     -->
        <!--    <p　class=image><a href="/posts/{{ $post->id }}"><img src="{{'/storage/images/' . $post['image']}}" width='300px' height='240px'/></a></p>-->
        <!--    <p class='body'>{{ $post->body }}</p>       -->
        <!--</div>-->
    <!--@endforeach-->
</x-app-layout>