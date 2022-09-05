<x-app-layout>
    <x-slot name="header">
        <h2>詳細画面</h2>
    </x-slot>
    
      <div class="log">
           <p class = 'date'>日付:{{ $log->date }}</p>
           <p class = 'spot'>地域{{ $log->spot }}</p>
           <p class = 'start_time'>開始時間：{{ $log->start_time}}</p>
           <p class = 'end_time'>終了時間：{{ $log->end_time}}</p>
           <p class = 'total_time'>合計時間：{{ $log->total_time}}</p>
           <p class = 'max_depth'> 最大水深：{{ $log->max_depth}}</p>
           <p class = 'ave_depth'> 平均水深：{{ $log->ave_depth}}</p>
           <p class = 'start_air'> 開始残圧：{{ $log->start_air}}</p>
           <p class = 'end_air'> 終了残圧：{{ $log->end_air}}</p>
           <div class = 'memo'>
        　 <p>メモ：</p>
           <p>{{ $log->memo}}</p>
           <div class = 'member'> 
           <label>メンバー：</label>
           <p>{{ $log->member}}</p>
           <div class = 'image'>
               <img src="{{ '/storage/images/' . $log->image }}">
           </div>
              <p class="edit">[<a href="/logs/{{ $log->id }}/edit">edit</a>]</p>
              
            <form action="/logs/{{ $log->id }}" id="form_{{ $log->id }}" method="post" style="display:inline">
                  @csrf
                  @method('DELETE')
                  <p><button type="submit">[delete]</button></p> 
            </form>
              <a href="/logs">戻る</a>
        </div>
           
           
        </div>
    　　　　<div class="side">
            <p class='create'>[<a href='/logs/create'>作成</a>]</p>
            
            <div class="box">
              <p class='home'><a href='/posts'>ホーム</a></p>
              <p class='create'><a href='/mypage'>マイページ</a></p>
              <p class='create'><a href='/logs'>マイログ</a></p>
            </div>
  
        </div>
        
        </article>
        
        </div>
</x-app-layout>