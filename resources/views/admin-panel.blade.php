@extends('layouts.main')
@section('content')

<div class="paddingContainer">
    <h2>Panel de administrador</h2>
    <div class="grid2">
        <a href="/admin-panel/users">
            <div class="adminCard">
                <i class="fa-solid fa-user"></i>
                <h3>Añadir usuario</h3>
            </div>
        </a>
        <div class="adminCard">
            <a href="/admin-panel/competencies">
                <i class="fa-solid fa-medal"></i>
            <h3>Añadir competencia</h3>
            </a>
        </div>
        <div class="adminCard">
            <a href="/admin-panel/courses">
                <i class="fa-solid fa-medal"></i>
            <h3>Añadir curso</h3>
            </a>
        </div>
    </div>
</div>

@endsection