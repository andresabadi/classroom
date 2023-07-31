@extends('layouts.main')

@section('title', 'Editar Curso')

@section('content')
<div class="paddingContainer">
    <form method="POST" action="{{ route('curso.update', $curso->id) }}" class="cursoForm">
        @csrf
        @method('PUT')
        <h2>Editar Curso</h2>
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $curso->title }}" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" value="{{ $curso->description }}" required>
        </div>
        <div>
            <label for="duration">Duracion:</label>
            <input type="text" id="duration" name="duration" value="{{ $curso->duration }}" required>
        </div>
        <div>
            <label for="cursera_url">Cursera URL:</label>
            <input type="text" id="cursera_url" name="cursera_url" value="{{ $curso->cursera_url }}">
        </div>
        <div>
            <!-- <label for="presentacion_url">Presentacion URL:</label>
            <input type="text" id="presentacion_url" name="presentacion_url" placeholder="Enter image URL" value="{{ $curso->presentacion_url }}">
        </div>
        <div>
            <label for="grabacion_url">Grabacion URL:</label>
            <input type="text" id="grabacion_url" name="grabacion_url" placeholder="Enter image URL" value="{{ $curso->grabacion_url }}">
        </div> -->
        <button type="submit">Guardar cambios</button>
    </form>
</div>
@endsection
