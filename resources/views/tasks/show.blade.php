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
       
       <div>{{ $task->content }}</div>
@endsection