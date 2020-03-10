@extends('layouts.app')

@section('content')
        <hr>
        
        {!! Form::model($task, ['route' => 'tasks.store']) !!}
            {!! Form::textarea('content', null, ['class' => 'form-control col-sm-8 mb-2', 'rows' => '7']) !!}
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
        
@endsection