@foreach ($competencias as $competencia)
<div class="card">
    <a href="/cursos">
        <img src="{{ asset('media/certificado-google.png') }}" alt="curso" />
    </a>
    <div>
        <div>
            <p class="azul">Competencia</p>
            <h4>{{ $competencia["title"] }}</h4>
        </div>
        <div class="iconos">
            <!-- <i class="fa-solid fa-circle-notch" style="font-size: 30px"></i>
                <span>60%</span> -->
            <div>
                <a href="{{ $competencia['presentaciones_url'] }}">
                    <i class="fa-solid fa-person-chalkboard"></i>
                </a>
                <!-- <i class="fa-solid fa-video"></i> -->
                <a href="{{ $competencia['grabaciones_url'] }}">
                    <i class="fa-solid fa-film"></i>
                </a>
                <!-- <img src="{{asset('media/cropped-android-chrome-512x512-1.png')}}" alt=""> -->
            </div>
            <div>
                <!-- buttons -->

                @auth
                <?php if (auth()->user()->isTeacher()) : ?>
                    <a href="/home/{{ $competencia->id }}/edit">
                        <x-editar :competencia="$competencia" />
                    </a>
                <?php endif; ?>
                @endauth

                @auth
                @can('view', $competencia)
                <a href="{{ route('competencia.show', $competencia->slug )}}">
                    <x-ver :competencia="$competencia" />
                </a>
                @endcan
                @endauth

                @auth
                <?php if (auth()->user()->isTeacher()) : ?>
                    <form action="/home/{{ $competencia->id }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <x-eliminar :competencia="$competencia" />
                    </form>
                    </a>
                <?php endif; ?>
                @endauth

            </div>
        </div>
    </div>
</div>
@endforeach