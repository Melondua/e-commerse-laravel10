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
        </div>
    </div>
    {{-- <p>ID: {{$order->id}} </p>
    <p>User: {{$order->user->name}} </p>
    <p> {{$order->created_at}} </p> --}}


    @endforeach
</div>

@endsection