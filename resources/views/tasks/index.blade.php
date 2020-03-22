@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {!! link_to_route('tasks.create', 'Create New', [], ['class' => 'btn btn-primary']) !!}
       
        @foreach ( $tasks as $task )
           <hr>
           
           <?php
            //30文字以上の長い文字列に対して、30文字目以降を”...”とリストに表示する処理
            if( mb_strlen( $task->content ) > 30 ) {
                $content = mb_substr($task->content, 0, 30) . " ...";
            }else{
                $content = $task->content;
            }
            
            //二行以上あるものを、リストに一行目だけ表示させる処理
            $array = explode("\r\n", $task->content);
            if( count($array) >= 2){
                $content = $array[0];
            }?>
           
           <div id="index-list-status">{!! link_to_route('tasks.show', $task->status, ['id' => $task->id]) !!}</div>
           <div id="index-list-content">{!! link_to_route('tasks.show', $content, ['id' => $task->id]) !!}</div>
           
        @endforeach
    @else
        <div class="center jumbotron col-sm-6 offset-sm-3">
            <div class="text-center">
                <h1>Welcome to TaskList</h1>
                {!! link_to_route('signup.get', 'Sign Up Now', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection