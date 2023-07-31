@extends('layouts.main')
@section('content')

<div class="paddingContainer">
    <a href="/home">
        << Mis competencias</a>
            <h1>{{ $competencia->title }} <i class="fa-solid fa-chevron-down plegableCursos"></i></h1>
            <div class="contents">
                <x-curso :cursos="$competencia->cursos" :competencia="$competencia" />

                @auth
                <?php if (auth()->user()->isTeacher()) : ?>
                    <a href="{{ route('curso.create', ['slug' => $competencia->slug]) }}">
                        <x-plus2 />
                    </a>
                <?php endif; ?>
                @endauth

            </div>
            <h2>Progreso</h2>
            <div class="progreso"></div>
            <h2>Acceso rápido</h2>
            <div class="accesoRapido">
                <div>
                    <a href="{{ $competencia['zoom_url'] }}">
                        <img src="{{ asset('media/zoom.png') }}" alt="zoom">
                        <div>
                    </a>
                    <!-- <h4>Enlace Zoom</h4> -->
                    <p class="azul">Ver instrucciones</p>
                </div>
            </div>
            <div>
                <a href="{{ $competencia['slack_url'] }}">
                    <img src="{{ asset('media/slack.png') }}" alt="slack">
                </a>
                <div>
                    <!-- <h4>Enlace Slack</h4> -->
                    <p class="azul">Ver instrucciones</p>
                </div>
            </div>
            <div>
                <a href="https://calendar.google.com/calendar/u/0/appointments/schedules/AcZssZ3a8ibKNLvl8pqAbGE7xJyxLNy1Vx9l20nopkUQO20EtFSNwGfaJGIFCjHTCtYRHcXxWlPawXp1"><img src="{{ asset('media/g-calendar.png') }}" alt="g-calendar"></a>
                <div>
                    <!-- <h4>Enlace Google Calendar</h4> -->
                    <p class="azul">Ver instrucciones</p>
                </div>
            </div>
</div>
<h2>Calendario</h2>
<div class="calendario">
    <h3>Semana 1 <i class="fa-solid fa-chevron-down despcalendario"></i></h3>
    <div class="programa"> <img src="{{ asset('media/week_4.png') }}"></div>
    <h3>Semana 2 <i class="fa-solid fa-chevron-down despcalendario"></i></h3>
    <div class="programa"> <img src="{{ asset('media/week_4.png') }}"></div>
    <h3>Semana 3 <i class="fa-solid fa-chevron-down despcalendario"></i></h3>
    <div class="programa"> <img src="{{ asset('media/week_4.png') }}"></div>
    <h3>Semana 4 <i class="fa-solid fa-chevron-down despcalendario"></i></h3>
    <div class="programa"> <img src="{{ asset('media/week_4.png') }}"></div>
    <h3>Semana 5 <i class="fa-solid fa-chevron-down despcalendario"></i></h3>
    <div class="programa"> <img src="{{ asset('media/week_5.png') }}"></div>
</div>
</div>
<script src="{{asset('js/dom-views.js')}}"></script>

@endsection