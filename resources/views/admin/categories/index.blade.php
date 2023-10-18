@extends('admin.templates.index')

@section('title-page', 'Categories')

@section('content')

    <a href="{{route('categories.create')}}" class="btn btn-primary mb-5">Create category</a>

    <table class="table table-bordered">
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>


@endsection