@extends('layouts.main')
@section('content')

<div class="paddingContainer">
  <a href="/admin/nueva-competencia"><< Nueva competencia</a>
  <h2>Nuevo curso</h2>
  <div class="recursos">
    <h3>Recursos</h3>
    <div>
      <div>
        <i class="fa-solid fa-person-chalkboard"></i>
        <x-plus-icon/>
      </div>
      <div>
        <i class="fa-solid fa-video"></i>
        <x-plus-icon/>
      </div>
      <div>
        <img src="{{asset('media/cropped-android-chrome-512x512-1.png')}}" alt="">
        <x-plus-icon/>
      </div>
    </div>
  </div>
  <div class="lecciones">
    <x-plus3 />
  </div>
</div>

@endsection