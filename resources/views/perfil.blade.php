@extends('layouts.main')
@section('content')
<div class="paddingContainer">   
    <form action="" method="post" class="perfilForm">
        <h2>Tu perfil</h2>
        <div>
            <label for="username">Nombre de usuario</label>
            <br>
        <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="email">Correo electrónico</label>
            <br>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="settings">Configuración</label>
        </div>
        <button class="botonAzul">Guardar cambios</button>
    </form>
</div>
@endsection