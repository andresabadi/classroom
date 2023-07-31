@foreach ($modulos as $modulo)
<div class="leccion card2">
  <div class="titulo">
    <p>Módulo</p>
    <h4>{{ $modulo["title"] }}</h4>
    <p>Duración: {{ $modulo["duration"] }} horas</p>
  </div>
  <div class="descripcion">
    <div>
      <p class="azul">Descripción</p>
      <p>{{ $modulo["description"] }}</p>
    </div>

    <!-- buttons -->
    <div class="botones">
      <div class="editar">
        @auth
        <?php if (auth()->user()->isTeacher()) : ?>
          <a href="{{ route('modulo.edit', $modulo->id) }}">
            <x-editar :modulo="$modulo" />
          </a>
        <?php endif; ?>
        @endauth

        @auth
        <?php if (auth()->user()->isTeacher()) : ?>
          <form action="{{ route('modulo.destroy', $modulo->id) }}" method="POST">
            @csrf
            @method("DELETE")
            <x-eliminar :modulo="$modulo" />
          </form>
        <?php endif; ?>
        @endauth
      </div>
      <div class="checkmark">
        <span class="azul hecho">Hecho</span>
        <span class="azul hidden no-hecho">Marcar como hecho</span>
        <span>
          <i class="fa-solid fa-square-check checked"></i>
          <i class="fa-regular fa-square-check unchecked hidden"></i>
        </span>
      </div>
    </div>
  </div>
</div>
@endforeach