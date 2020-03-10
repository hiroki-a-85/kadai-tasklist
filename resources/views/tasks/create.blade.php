@extends('layouts.app')

@section('content')
        <hr>

        <div>
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
                
                <div class="form-group">
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
        </div>
@endsection