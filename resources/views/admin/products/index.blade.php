@extends('admin.templates.index')

@section('title-page', 'Products')

@section('content')
    <table class="table table-bordered">
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
            <th>Amount</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->amount}}</td>
                <td>
                    <form action="/admin/products/{{$product->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
