<x-app-layout>
    <x-slot name="header">
        <h2>マイページ編集画面</h2>
    </x-slot>
　　　　
　　<div class="content">
        <form action="/mypage/{{ $user->id }}/update" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <h2>名前</h2>
                <input type='text' name='name' value="{{ $user->name }}">
                @if($user->image)
                    <p>(画像ファイル：{{$user->image}})</p>
                    <img src="{{'/storage/images/' . $user->image}}" width='400px' height='360px'/>
                @endif
                <h2>画像登録</h2>
                <input type='file' name='image' value="{{ $user->image }}">
                <p>自己紹介</p>
                <textarea name='body' value="{{ $user->body }}"></textarea>
            <input type="submit" value="保存">
             <p><a href="/mypage/{{ $user->id }}">戻る</a></p>
        </form>
    </div>
</x-app-layout>