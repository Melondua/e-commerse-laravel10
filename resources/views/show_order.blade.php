@extends('layouts.app')

@section('content')
<div class="container">
    <p>id: {{$order->id}} </p>
    <p>user: {{$order->user->name}} </p>
    @foreach ($order->transactions as $transactions)
    <p>product: {{$transactions->product->name}} </p>
    <p>amount: {{$transactions->amount}} </p>
    @endforeach
</div>
@endsection