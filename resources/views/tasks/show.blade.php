@extends('layouts.app')

@section('content')
        <div id="edit-button">
            {!! link_to_route('tasks.edit', 'Edit', ['id' => $task->id], ['class' => 'btn btn-primary']) !!}
        </div>
        
        <div id="delete-button">
            {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-secondary']) !!}
            {!! Form::close() !!}
        </div>

       <hr>
       
       <div id="show-field">{{ $task->content }}</div>
       
       <?php
        $created_at = strtr(mb_substr($task->created_at, 0, 16), '-', '/');
        $updated_at = strtr(mb_substr($task->updated_at, 0, 16), '-', '/');
       ?>
       
       @if ( strcmp($task->created_at, $task->updated_at) == 0)
       <div id="created_at">created_at {{ $created_at }}</div>
       @else
       <div id="updated_at">updated_at {{ $updated_at }}</div>
       @endif
       
@endsection