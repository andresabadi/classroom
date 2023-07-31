@extends('layouts.main')

@section('title', 'Editar Modulo')

@section('content')
<div class="paddingContainer">
    <form method="POST" action="{{ route('modulo.update', $modulo->id) }}" class="moduloForm">
        @csrf
        @method('PUT')
        <h2>Editar Modulo</h2>
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $modulo->title }}" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" value="{{ $modulo->description }}" required>
        </div>
        <div>
            <label for="duration">Duracion:</label>
            <input type="text" id="duration" name="duration" value="{{ $modulo->duration }}">
        </div>
    
        <button type="submit">Guardar cambios</button>
    </form>
</div>

@endsection
