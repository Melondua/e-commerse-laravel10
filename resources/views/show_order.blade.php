@extends('layouts.app')

@section('content')
<div class="container">
    <p>id: {{$order->id}} </p>
    <p>user: {{$order->user->name}} </p>
    @foreach ($order->transactions as $transactions)
    <p>product: {{$transactions->product->name}} </p>
    <p>amount: {{$transactions->amount}} </p>
    @endforeach

    @if ($order->is_paid == false && $order->payment_receipt == null)
    <form action="{{route('submit_payment_receipt', $order)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="payment_receipt">Upload your payment receipt</label><br>
        <input type="file" name="payment_receipt" id="payment_receipt"><br>
        <button type="submit">Submit payment</button>
    </form>

    @endif
</div>
@endsection