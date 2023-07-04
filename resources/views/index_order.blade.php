@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($orders as $order)
    <div class="card m-3">
        <div class="card-header">
            Belanja
            <p> {{$order->created_at}} </p>
        </div>
        <div class="card-body">
            <p>ID: {{$order->id}} </p>
            <p>User: {{$order->user->name}} </p>
            <a href="{{route('show_order', $order)}}" class="btn btn-primary">Detail</a>
            <p>
                @if ($order->is_paid == true)
                paid
                @else
                unpaid
                @if ($order->payment_receipt)
                <a href="{{url('storage/payment/'.$order->payment_receipt)}}">Show payment receipt</a>
                @endif
            <form action="{{route('confirm_payment', $order)}}" method="post">
                @csrf
                <button type="submit">Confirm</button>
            </form>
            @endif
            </p>

        </div>
    </div>
    {{-- <p>ID: {{$order->id}} </p>
    <p>User: {{$order->user->name}} </p>
    <p> {{$order->created_at}} </p> --}}


    @endforeach
</div>

@endsection