@extends('layouts.main')
@section('content')

<div class="paddingContainer">
    <a href="/admin-panel/competencies"><< Competencias</a>
    <h1>Nueva competencia <i class="fa-solid fa-chevron-down plegableCursos"></i></h1>
    <div class="contents">
        <x-plus2 />
    </div>
    <h2>Acceso rápido</h2>
    <div class="accesoRapido">
        <div>
            <img src="{{ asset('media/zoom.png') }}" alt="zoom">
            <div>
                <x-plus-icon/>
            </div>   
        </div>
        <div>
            <img src="{{ asset('media/slack.png') }}" alt="slack">
            <div>
                <x-plus-icon/>
            </div>  
        </div>
        <div>
            <img src="{{ asset('media/g-calendar.png') }}" alt="g-calendar">
            <div>
                <x-plus-icon/> 
            </div>
        </div>
    </div>
    <h2>Calendario</h2>
    <div class="calendario">
        <h3>Semana 1 <i class="fa-solid fa-chevron-down"></i></h3>
        <h3>Semana 2 <i class="fa-solid fa-chevron-down"></i></h3>
            <h3>Semana 3 <i class="fa-solid fa-chevron-down"></i></h3>
                <h3>Semana 4 <i class="fa-solid fa-chevron-down"></i></h3>
    </div>
</div>
<script src="{{asset('js/dom-views.js')}}"></script>

@endsection