@extends('layouts.main')
@section('content')
<div class="paddingContainer"> 
    <form action="" method="post" class="passwordForm">
        <h2>Cambio de contraseña</h2>
        <div>
            <label for="email">
                Correo electrónico
            </label>
            <br>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="newpassword">
                Contraseña nueva
            </label>
            <br>
            <input type="password" name="newpassword" id="newpassword">
        </div>
        <button class="botonAzul">Cambiar contraseña</button>
    </form>
</div>
@endsection