@extends('master')

@section('content')

<h2>Usuarios</h2>
<ul>
    @foreach($users as $user)
    <li>{{ $user->name }} - {{ $user-> email }}</li>
    @endforeach
</ul>
@endsection