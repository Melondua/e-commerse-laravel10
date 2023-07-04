@extends('layouts.app')

@section('content')
<div class="container">
    {{-- fungsi peringatan jika permintaan melebihi stock --}}
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <p> {{$error}} </p>
    @endforeach
    @endif
    <p>nama: {{$user->name}} </p>
    <p>Email: {{$user->email}} </p>
    <p>role: {{$user->is_admin ? 'Admin' : 'Member'}} </p>
    <form action="{{route('edit_profile')}}" method="post">
        @csrf
        <input type="text" name="name" value="{{$user->name}}">
        <input type="password" name="password">
        <input type="password" name="password_confirmation" id="">
        <button type="submit">Change profile details</button>
    </form>
</div>
@endsection