@extends('layouts.app')

@section('content')
    <hr>
    
    @if (count($errors) > 0)
        <ul class="alert alert-danger" role="alert">
            @foreach ( $errors->all() as $error )
                <li class="ml-4">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
        {!! Form::label('status', 'Status:') !!}
        {!! Form::text('status', null, ['class' => 'form-control mb-3 status-input']) !!}
        {!! Form::label('content', 'Content:') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control col-sm-8 mb-4 mt-2', 'rows' => '7']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection