<x-app-layout>
    <x-slot name="header">
        <h2>記事作成</h2>
    </x-slot>    

        <article>
         <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="spot">
                <h2>Spot</h2>
                <select name="post[spot_id]">
                    <option hidden>選択してください</option>
                    @foreach($spots as $spot)
                        <option value="{{ $spot->id }}">{{ $spot->name }}</option>
                    @endforeach
                    <p class="spot__error" style="color:red">{{ $errors->first('spot_id') }}</p>
                </select>
            </div>
            
            <div class="body">
                <p>コメント</p>
                <textarea name="post[body]" placeholder="コメント">{{ old('body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('body') }}</p>
            </div>
            
            <div class="image">
                <label for="image">画像登録</label>
                <input type="file" name="post[image]">
                <p class="image__error" style="color:red">{{ $errors->first('image') }}</p>
            </div>

            
            <input type="submit" value="保存"/>
    </form>
           <div class="back">[<a href="/">back</a>]</div>
    </body>
    
        <div class="side">
            <div class="box">
              <p class='home'><a href='/posts'>ホーム</a></p>
              <p class='create'><a href='/mypage'>マイページ</a></p>
              <p class='create'><a href='/mylog'>マイログ</a></p>
            </div>
        </div>
          
        </article>    
</x-app-layout>