@foreach($cursos as $curso)

<div class="curso card2">
  <div class="titulo">
    <p>Curso</p>
    <h4>{{ $curso["title"] }}</h4>
    <div>
      <p>Duración: {{ $curso["duration"] }} semanas</p>
      <i class="fa-solid fa-circle-check"></i>
    </div>
  </div>
  <div class="descripcion">
    <div>
      <p class="azul">Descripción</p>
      <p>{{ $curso["description"] }}</p>
    </div>
    <div class="iconos">
      <div>
        <!-- <i class="fa-solid fa-person-chalkboard"></i>
            <i class="fa-solid fa-video"></i>
            {{-- <i class="fa-solid fa-film"></i> --}} -->
        <a href="{{ $curso['cursera_url'] }}">
          <img src="{{ asset('media/cropped-android-chrome-512x512-1.png') }}" alt="coursera">
        </a>
      </div>
      <!-- buttons -->
      <div>
        @auth
        <?php if (auth()->user()->isTeacher()) : ?>
          <a href="{{ route('curso.edit', $curso->id) }}">
            <x-editar :curso="$curso" />
          </a>
        <?php endif; ?>
        @endauth
        <a href="{{ route('curso.show', $curso->slug) }}">
          <x-ver :curso="$curso" />
        </a>
        @auth
        <?php if (auth()->user()->isTeacher()) : ?>
          <form action="{{ route('curso.destroy', $curso->id) }}" method="POST">
            @csrf
            @method("DELETE")
            <x-eliminar :curso="$curso" />
          </form>
        <?php endif; ?>
        @endauth
      </div>
    </div>
  </div>
</div>

@endforeach