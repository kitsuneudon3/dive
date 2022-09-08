<x-app-layout>
    <x-slot name="header">
        <h2>詳細画面</h2>
    </x-slot>
        
       <article>
    　　<div class="content">       
    　　     <div class="post">
                <p>{{$post->user->name}}</p>
                <p>{{$post->spot->name}}</p>
                <p><img src="{{'/storage/images/' . $post['image']}}" width='400px' height='360px'/></p>
                <p>{{$post->body}}</p>
                <p>{{ $post->updated_at }}</p>
                <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
                
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                  @csrf
                  @method('DELETE')
                  <p><button type="submit">[delete]</button></p> 
                </form>
                
            </div>
       
        <!--いいね-->
        　　@if($post->likes()->where('user_id', Auth::id())->exists())
              <div class="like">
                <form action="/posts/{{ $post->id }}/unlike" method="POST">
                  @csrf
                  <input type="submit" value="いいね解除">
                  <p>いいね数:{{ $post->likes()->count() }}</p>
                </form>
              </div><!-- /.like -->
            @else
              <div class="like">
                <form action="/posts/{{ $post->id }}/like" method="POST">
                  @csrf
                    <input type="submit" value="いいね">
                    <p>いいね数:{{ $post->likes()->count() }}</p>
                </form>
              </div><!-- /.like -->
            @endif         
            
            <div class="commentArea">        
                <form action="/posts/{post}" method="POST">
                    @csrf
                    <p>コメント</p>
                    <input name="post_comment[post_id]" type="hidden" value="{{ $post->id }}">
                    <textarea name="post_comment[comment]" placeholder="コメント"></textarea>
                    <input type="submit" value="保存"/>
                </form>
            </div>
                 
            <div class=commentList>
                <p>コメント一覧</p>
                    @foreach ($post->post_comments as $post_comment)
                    <div class="comment">
                        <p class='spot'><a href="/mypage/{{ $post_comment->user->id }}">
                        {{ $post->user->name }}</a></p>
                        <img src="{{'/storage/images/animal_mark01_buta.png'}}" width='50px' height='50px'/>
                        {{--<img src="{{'/storage/images/' . $post_comment->user->image}}" width='50px' height='50px'/>--}}
                        <p>{{ $post_comment->body }}</p>
                    </div>
                    @endforeach
　　　　    </div>
        </div><!-- /.containt -->
         
        <div class="side">
             
             <x-button class='create'><a href='/posts/create'>作成</a>
              </x-button>
            
            <div class="box">
              <p class='home'><a href='/posts'>ホーム</a></p>
              <p class='create'><a href='/'>マイページ</a></p>
              <p class='create'><a href='/logs'>マイログ</a></p>
            </div>
        </div>
        </article>
    </x-app-layout>