@extends('layouts.app')

@section('content')
<div class="container">
    <img src="{{url('storage/product/' . $product->image)}}" alt="" height="500px">
    <p>name: {{$product->name}} </p>
    <p>description: {{$product->description}} </p>
    <p>Rp: {{$product->price}} </p>
    <p>stock: {{$product->stock}} </p>

    <div class="row">
        <div class="col-1">
            <form action="{{route('index_product', $product)}}" method="GET">
                <button type="submit" class="btn btn-info">Kembali</button>
            </form>
        </div>

        <div class="col-1">
            <form action="{{route('edit_product', $product)}}" method="GET">
                <button type="submit" class="btn btn-warning">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection


{{-- <form action="{{route('index_product')}}" method="GET">
    <button type="submit">Kembali</button>
</form>
<form action="{{route('edit_product', $product)}}" method="GET">
    <button type="submit">Edit detail</button>
</form> --}}