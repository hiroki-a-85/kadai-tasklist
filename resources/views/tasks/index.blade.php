@extends('layouts.app')

@section('content')
    {!! link_to_route('tasks.create', 'Create New', [], ['class' => 'btn btn-primary']) !!}
   
   @foreach ( $tasks as $task )
   
       <hr>
       
       <?php
        //30文字以上の長い文字列に対して、30文字目以降を”...”と表示する処理
        if( mb_strlen( $task->content ) > 30 ) {
            $content = mb_substr($task->content, 0, 30) . "...";
        }else{
            $content = $task->content;
        }
        
        //リストに一行目を表示して、二行目以降を”...”と表示する処理
        $array = explode("\r\n", $task->content);
        if( count($array) >= 2){
            $content = $array[0] . "\r\n" . "...";
        }
       ?>
       
       <div id="index-list">{!! link_to_route('tasks.show', $content, ['id' => $task->id]) !!}</div>
       
   @endforeach
   
@endsection