<x-app-layout>
    <x-slot name="header">
        <h2>詳細画面</h2>
    </x-slot>
    
      <div class="log">
           <p class = 'date'>日付:{{ $log->date }}</p>
           <p class = 'spot'>地域{{ $log->spot }}</p>
           <p class = 'start_time'>開始時間 {{ $log->start_time}}
           <p class = 'end_time'>終了時間 {{ $log->end_time}}
           <p class = 'max_depth'> 最大水深{{ $log->max_depth}}
           <p class = 'ave_depth'> 平均水深{{ $log->ave_depth}}
           <p class = 'start_air'> 開始残圧{{ $log->start_air}}
           <p class = 'end_air'> 終了残圧{{ $log->end_air}}
           <p class = 'memo'> メモ{{ $log->memo}}
           <p class = 'member'> メンバー{{ $log->member}}
           <div class = 'image'>
               <img src="{{ '/storage/images/' . $log->image }}">
           </div>
              <a href="/logs">戻る</a>
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