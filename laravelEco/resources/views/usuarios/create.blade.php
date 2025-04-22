@extends('layouts.crud')

@section('content')
<div class="container">
    <h2> usuario</h2>
    <form action="{{ route('usuarios.store') }}" method="POST">
        @include('usuarios.form')
    </form>
</div>
@endsection