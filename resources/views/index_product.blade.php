@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($products as $product)
    <p>name: {{$product->name}} </p>
    <img src="{{url('storage/product/' . $product->image)}}" alt="" height="100px">
    <div class="row m-3">
        <div class="col-md-8">
            <form action="{{route('show_product', $product)}}" method="GET">
                <button type="submit" class="btn btn-primary">Show detail</button>
            </form>
        </div>
    </div>

    <div class="row m-3">
        <div class="col-md-8">
            <form action="{{route('delete_product', $product)}}" method="POST">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete Product</button>
            </form>
        </div>
    </div>

    @endforeach
</div>
@endsection