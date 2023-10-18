@extends('admin.templates.index')

@section('title-page', 'Create Category')

@section('content')

    {!! Form::open(['route'=>'categories.store']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Category name: ') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group mt-3">
            {!! Form::label('description', 'Category description: ') !!}
            {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
        </div>

         {!! Form::submit('Add Category', ['class'=>'btn btn-primary mt-3']) !!}

    {!! Form::close() !!}
@endsection