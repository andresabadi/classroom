@extends ('layouts.main')

@section('title', 'Crear nuevo Modulo')

@section ('content')
<div class="paddingContainer">
        <form method="POST" action="{{ route('modulo.store', ['slug' => $curso->slug]) }}" class="moduloForm">
        @csrf
        <h2>Crear Modulo nuevo</h2>
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="" required>
            @error('title')
            <div class="form-error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="description">Descripcion:</label>
            <input type="text" id="description" name="description" value="" required>
            @error('description')
            <div class="form-error">{{ $message }}</div>
            @enderror
        </div>
        <div>
        <label for="duration">Duracion:</label>
        <input type="text" id="duration" name="duration" value="" required>
        @error('duration')
        <div class="form-error">{{ $message }}</div>
        @enderror
    </div>
        <button type="submit">Crear</button>
    </form>
</div>

@endsection