<x-app-layout>
    <x-slot name="header">
        <h2>編集画面</h2>
    </x-slot>
　　　　
　　<div class="content">
        <form action="/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="spot">
                <h2>Spot</h2>
                <select name="spot_id">
                <option value="spot" selected>{{ $post->spot->name }}</option>
                    @foreach($spots as $spot)
                       <option value="{{ $spot->id }}">{{ $spot->name }}</option>
                    @endforeach
                </select>
                <option value="apple"></option>
            </div>
            <div class='content__body'>
                <h2>コメント</h2>
                <input type='text' name='body' value="{{ $post->body }}">
            </div>
            <div class='content__image'>
                @if($post->image)
                <div>
                    (画像ファイル：{{$post->image}})
                </div>
                <img src="{{ '/storage/images/' . $post->image }}" >
                @endif
                
                <h2>画像登録</h2>
                <input type='file' name='image' value="{{ $post->image }}">
            </div>
            
    </div>
            <input type="submit" value="保存">
        </form>
    </div>
</x-app-layout>