<x-app-layout>
    <x-slot name="header">
        <h2>詳細画面</h2>
    </x-slot>
    
    
    <form action="/logs/store" method="POST"　enctype="multipart/form-data">
            @csrf
    
      <div class="log">
           <p class = 'date'>日付</p>
           <input type="date" name="log[date]">
           
           <p class = 'spot'>地域</p>
           <input type="text" name="log[spot]" />
           
           <p class = 'dive_point'>ポイント名</p>
           <input type="text" name="log[dive_point]" />
           
            <p class = 'start_time'>開始時刻 </p>
           <input type="text" name="log[start_time]" />
           
           <p class = 'end_time'>終了時刻 </p>
           <input type="text" name="log[end_time]" />
           
           <p class='total_time'>合計時間</p>
           <input type="text" name="log[total_time]" />
           
           <p class = 'max_depth'> 最大水深</p>
           <input type="text" name="log[max_depth]" />
           
           <p class = 'ave_depth'> 平均水深</p>
           <input type="text" name="log[ave_depth]" />
           
           <p class = 'start_air'> 開始残圧</p>
           <input type="text" name="log[start_air]" />
           
           <p class = 'end_air'> 終了残圧</p>
           <input type="text" name="log[end_air]"/>
           
           <p class = 'memo'> メモ</p>
           <textarea name="log[memo]" placeholder="memo"></textarea>
           
           <p class = 'member'> メンバー</p>
           <input type="text" name="log[member]" />
           
           <div class = 'image'>
               <label for="image">画像登録</label>
                <input type="file" name="log[image]">
           </div>
        <input type="submit" value="[保存]"/>
    </form>    
             <p><a href="/logs">戻る</a></p>
        </div>
           
           
        </div>
    　　　　<div class="side">
            <p class='create'>[<a href='/logs/create'>作成</a>]</p>
            
            <div class="box">
              <p class='home'><a href='/'>ホーム</a></p>
              <p class='create'><a href='/mypage'>マイページ</a></p>
              <p class='create'><a href='/mylog'>マイログ</a></p>
            </div>
  
        </div>
        
        </article>
        
        </div>
</x-app-layout>