@if (count($errors) > 0)
    <div class="col-sm-6 offset-sm-3">
        <ul class="alert alert-danger" role="alert">
            @foreach ( $errors->all() as $error )
                <li class="ml-4">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif