<x-app-layout>
    <x-slot name="header">
        <h2>MyLog</h2>
    </x-slot>
    
    <div class='contant'>
        @foreach ($logs as $log)
        <div class="log">
           <p class = 'date'>日付：{{ $log->date }}</p>
           <p class = 'spot'>地域：{{ $log->spot }}</p>
           <p class = 'max_depth'>最大水深：{{ $log->max_depth}}
           <div class = 'image'>
               <a href="/logs/{{ $log->id }}"><img src="{{ '/storage/images/' . $log->image }}" width='300px' height='240px'/></a>
           </div>
        </div>
        @endforeach

    　　　　<div class="side">
            <p class='create'>[<a href='/logs/create'>作成</a>]</p>
            
            <div class="box">
              <p class='home'><a href='/posts'>ホーム</a></p>
              <p class='create'><a href='/mypage'>マイページ</a></p>
              <p class='create'><a href='/logs'>マイログ</a></p>
            </div>
              
        </div>
         <div class='paginate'>
            {{ $logs->links() }}
        </div>
    </div>    
</x-app-layout>