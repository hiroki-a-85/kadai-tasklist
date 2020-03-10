@extends('layouts.app')

@section('content')
    <hr>
   
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
   
   
@endsection