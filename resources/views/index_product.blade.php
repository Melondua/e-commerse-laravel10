@extends('layouts.app')

@section('content')
<div class="container">






    <div class="card mb-5" style="width: 18rem;">
        @foreach ($products as $product)
        <img src="{{url('storage/product/' . $product->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">{{$product->description}}</p>
            <div class="row gx-6  text-center">
                <div class="col">
                    <form action="{{route('show_product', $product)}}" method="GET">
                        <button type="submit" class="btn btn-primary">detail</button>
                    </form>
                </div>

                <div class="col">
                    <form action="{{route('delete_product', $product)}}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</div>



{{-- @foreach ($products as $product)
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

@endforeach --}}

@endsection