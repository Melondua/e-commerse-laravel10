@extends('layouts.app')

@section('content')
<div class="container">
    <img src="{{url('storage/product/' . $product->image)}}" alt="" height="500px">
    <p>name: {{$product->name}} </p>
    <p>description: {{$product->description}} </p>
    <p>Rp: {{$product->price}} </p>
    <p>stock: {{$product->stock}} </p>
    <form action="{{route('index_product')}}" method="GET">
        <button type="submit">Kembali</button>
    </form>
    <form action="{{route('edit_product', $product)}}" method="GET">
        <button type="submit">Edit detail</button>
    </form>
</div>
@endsection