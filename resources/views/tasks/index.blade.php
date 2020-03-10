@extends('layouts.app')

@section('content')
    {!! link_to_route('tasks.create', 'Create New', [], ['class' => 'btn btn-primary']) !!}
   
   @foreach ( $tasks as $task )
       <hr>
       <div>{!! link_to_route('tasks.show', $task->content, ['id' => $task->id]) !!}</div>
   @endforeach
@endsection