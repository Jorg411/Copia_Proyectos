@extends('layouts.crud')

@section('content')
<div class="container" >
    <h2>Editar usuario</h2>
    <form action="{{ route('usuarios.update', $usuario) }}" method="POST">
        @method('PUT')
        @include('usuarios.form')
    </form>
</div>
@endsection
