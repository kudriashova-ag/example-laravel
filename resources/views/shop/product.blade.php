@extends('layouts.app')

@section('content')
    
    <h1>{{ $product->name }}</h1>

    <div class="row">
        <div class="col-4">
            <img src="{{ $product->image }}" alt="" class="img-fluid">
        </div>

        <div class="col-8">
            <div class="h5 text-danger">{{ $product->price }}</div>

            <form action="" name="addToCartForm">
                <input type="number" min="1" value="1" name="amount">
                <input type="hidden" name="id" value="{{$product->id}}">
                <button class="btn btn-primary">To Cart</button>
            </form>


        </div>
    </div>

    <hr>




    <h2 class="mt-4">Last Views Products</h2>
    <div class="row">
        @foreach( $lastViewsProducts as $item )
            <div class="col-md-2">
                @include('shop._product-card', ['product' => $item])
            </div>
        @endforeach
    </div>

    


    <h2 class="mt-4">Recommended Products</h2>
    <div class="row">
        @foreach( $product->recommended as $product )
            <div class="col-md-3">
                @include('shop._product-card')
            </div>
        @endforeach
    </div>




@endsection