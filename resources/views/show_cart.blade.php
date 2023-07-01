@extends('layouts.app')

@section('content')
<div class="container">
    {{-- fungsi peringatan jika permintaan melebihi stock --}}
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <p> {{$error}} </p>
    @endforeach

    @endif


    @foreach ($carts as $cart)
    <img src="{{url('storage/product/'. $cart->product->image)}}" alt="" height="100px">
    <p>name: {{$cart->product->name}} </p>
    <p>amount: {{$cart->amount}} </p>
    <form action="{{route('update_cart', $cart)}}" method="POST">
        @method('patch')
        @csrf
        <input type="number" name="amount" value={{$cart->amount}}>
        <button type="submit">submit</button>
    </form>
    <form action="{{route('delete_cart', $cart)}}" method="POST">
        @method('delete')
        @csrf
        <button type="submit">Delete</button>
    </form>
    @endforeach

    <form action="" method="post">
        @csrf
        <button type="submit">CheckOut</button>
    </form>
</div>
@endsection