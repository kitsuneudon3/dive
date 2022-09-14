<x-app-layout>
    <x-slot name="header">
        <h2>ユーザー情報の変更画面</h2>
    </x-slot>
　　　　
　　<div class="content">
        <form action="/mypage/{{ $user->id }}/updateUser" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <img src="{{'/storage/images/animal_mark01_buta.png'}}" width='100px' height='100px'/>
                        {{--<img src="{{'/storage/images/' . $post_comment->user->image}}" width='50px' height='50px'/>--}}
                <h2>名前</h2>
                <input type='text' name='user[name]' value="{{ $user->name }}">
                <p>パスワード</p>
                <input type='text' name='user[password]' value="{{ $user->password }}">
                <p>登録メール</p>
                <input type='text' name='user[email]' value="{{ $user->email }}">
                
            <input type="submit" value="保存">
        </form>
    </div>
</x-app-layout>