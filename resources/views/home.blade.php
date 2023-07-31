@extends('layouts.main')
@section('content')

<div class='homeContainer'>
  <x-search />
  <div class="compContainer">
    <section class='competencias'>
      <h2>Mis competencias</h2>
      <div class='grid'>

        <?php if (!auth()->user()->isTeacher()) : ?>
          @if (!empty($user->competencias))

          <x-card :competencias="$user->competencias" />

          @else
          <p>No competencias found.//</p>
          @endif

        <?php else : ?>

          @if (!empty($userCompetencias))

          <x-card :competencias="$userCompetencias" />

          @else
          <p>No competencias found.</p>
          @endif
        <?php endif; ?>

        @auth
        <?php if (auth()->user()->isTeacher()) : ?>
          <a href="{{ route('competencia.create') }}">
            <x-plus />
          </a>
        <?php endif; ?>
        @endauth

      </div>
    </section>
    <section class='competencias'>
      <h2>Otros talleres</h2>
      <div class='grid'>
        @if (!empty($competencias))

        <x-card :competencias="$competencias" />

        @else
        <p>No competencias found.</p>
        @endif
      </div>
    </section>
  </div>
</div>

@endsection