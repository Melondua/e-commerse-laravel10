@extends('layouts.app')

@section('content')
<div class="container">
    {{-- fungsi peringatan jika permintaan melebihi stock --}}
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <p> {{$error}} </p>
    @endforeach

    @endif
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

        <div class="col-1">
            <form action="{{route('add_to_cart', $product)}}" method="POST">
                @csrf
                <input type="number" name="amount" value="1">
                <button type="submit" class="btn btn-primary">add to cart</button>
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