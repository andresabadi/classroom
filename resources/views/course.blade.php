@extends('layouts.main')
@section('content')

<div class="paddingContainer">
  <a href="{{ route('competencia.show', ['slug' => $curso->competencia->slug]) }}">
    << Mis cursos</a>
      <h2>{{ $curso->title }}</h2>
      <div class="lecciones">
        <x-leccion :modulos="$curso->modulos" :curso="$curso" />
        @auth
        <?php if (auth()->user()->isTeacher()) : ?>
          <a href="{{ route('modulo.create', ['slug' => $curso->slug]) }}">
            <x-plus3 />
          </a>
        <?php endif; ?>
        @endauth
      </div>
</div>
<script src="{{asset('js/dom-views.js')}}"></script>

@endsection