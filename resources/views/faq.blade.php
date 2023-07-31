@extends('layouts.main')
@section('content')
<div class="paddingContainer">
    <h2>FAQ</h2>
    <div class="faq">
        <div>
            <h3>Cómo verificar tu identificación</h3>
            <div class="botones">

            @auth
            <?php if (auth()->user()->isTeacher()) : ?>
                    <x-editar />
                    <x-eliminar />
                    <?php endif; ?>
                    @endauth
                    <i class="fa-solid fa-circle-plus desplegarFaq"></i>
                    <i class="fa-solid fa-circle-minus plegarFaq hidden"></i>
                </div>

        </div>
        <p class="respuesta hidden">En la esquina superior derecha de Coursera (opciones de su cuenta) puede elegir "Configuración", "Verificación de ID".</p>
    </div>
    <div class="faq">
        <div>
            <h3>Problemas con tu identificación con DNI o doc. oficial</h3>
            <div class="botones">

            @auth
            <?php if (auth()->user()->isTeacher()) : ?>
                    <x-editar />
                    <x-eliminar />
                    <?php endif; ?>
                    @endauth
                    
                    <i class="fa-solid fa-circle-plus desplegarFaq"></i>
                    <i class="fa-solid fa-circle-minus plegarFaq hidden"></i>
                </div>
        </div>
        <p class="respuesta hidden">Si tienes problemas, como que el escaneo de tu documento de identidad es demasiado grande, no tienes pasaporte, recibes un mensaje de error, etc.: ponte en contacto con el servicio de asistencia de Coursera. Ellos te ayudarán. Busca en la sección de ayuda para la verificación del DNI de Coursera.</p>
    </div>
    <div class="faq">
        <div>
            <h3>Temporalización del curso</h3>
            <div class="botones">

            @auth
            <?php if (auth()->user()->isTeacher()) : ?>
                    <x-editar />
                    <x-eliminar />
                    <?php endif; ?>
                    @endauth
                    
                    <i class="fa-solid fa-circle-plus desplegarFaq"></i>
                    <i class="fa-solid fa-circle-minus plegarFaq hidden"></i>
                </div>
        </div>
        <p class="respuesta hidden">En Coursera es posible que aparezca el mensaje de "Restablecer mis plazos". Puedes hacer clic en ese botón y los plazos de Coursera se restablecerán. Esas fechas no son importantes. Los plazos de los cursos difieren de los nuestros. Sólo asegúrate de terminar todo el programa antes del plazo programado para todo el grupo.
            <br />Solución: Haz clic en "Restablecer mis plazos".
        </p>
    </div>
    <div class="faq">
        <div>
            <h3>Ir al siguiente curso</h3>
            <div class="botones">

            @auth
            <?php if (auth()->user()->isTeacher()) : ?>
                    <x-editar />
                    <x-eliminar />
                    <?php endif; ?>
                    @endauth
                    
                    <i class="fa-solid fa-circle-plus desplegarFaq"></i>
                    <i class="fa-solid fa-circle-minus plegarFaq hidden"></i>
                </div>
        </div>
        <p class="respuesta hidden">Si has terminado el primer curso, se te pedirá que verifiques tu identificación para obtener el certificado de ese curso. Después de esto, puedes inscribirte en el segundo curso. Sólo tienes que ir a la página principal de Coursera, elegir tu programa y seleccionar el siguiente curso.
            <br />Solución: Elige "Inscríbete en el curso" en la página de inicio
        </p>
    </div>
    <div class="faq">
        <div>
            <h3>Su cuota ha sido superada</h3>
            <div class="botones">

            @auth
            <?php if (auth()->user()->isTeacher()) : ?>
                    <x-editar />
                    <x-eliminar />
                    <?php endif; ?>
                    @endauth
                    
                    <i class="fa-solid fa-circle-plus desplegarFaq"></i>
                    <i class="fa-solid fa-circle-minus plegarFaq hidden"></i>
                </div>
        </div>
        <p class="respuesta hidden">En Qwiklabs puede aparecer el mensaje "Lo sentimos, su cuota ha sido superada para este laboratorio". Este puede ser el caso cuando has intentado un laboratorio específico más de tres veces. Ponte en contacto con el servicio de asistencia de Qwiklabs (chatea con ellos) y te ayudarán rápidamente.
            <br />Solución: Envía un correo electrónico a support@qwiklabs.com o chatea con el servicio de asistencia de Qwiklabs. Utilice el signo de interrogación (?) en la herramienta de Qwiklabs. O mira <a href="">este enlace</a>.
        </p>
    </div>
    <div class="faq">
        <div>
            <h3>Certificates</h3>
            <div class="botones">

            @auth
            <?php if (auth()->user()->isTeacher()) : ?>
                    <x-editar />
                    <x-eliminar />
                    <?php endif; ?>
                    @endauth
                    
                    <i class="fa-solid fa-circle-plus desplegarFaq"></i>
                    <i class="fa-solid fa-circle-minus plegarFaq hidden"></i>
                </div>
        </div>
        <p class="respuesta hidden">Certificados de Google / Coursera: Curso 1, 2, 3, 4 y 5
            Tras la realización de cada uno de los 5 cursos y la superación de las evaluaciones al final de cada curso, se emitirán los certificados Centro de ayuda Coursera:
            <br />● Envíanos un correo electrónico
            <br />● O publica una pregunta en Slack
        </p>
    </div>
    <div class="faq">
        <div>
            <h3>No puedo hacer una tarea-evaluación</h3>
            <div class="botones">

            @auth
            <?php if (auth()->user()->isTeacher()) : ?>
                    <x-editar />
                    <x-eliminar />
                    <?php endif; ?>
                    @endauth
                    
                    <i class="fa-solid fa-circle-plus desplegarFaq"></i>
                    <i class="fa-solid fa-circle-minus plegarFaq hidden"></i>
                </div>
        </div>
        <p class="respuesta hidden">Solución: Puedes hacer una tarea tres veces. Después, tendrás que esperar 24 horas. Entonces podrás volver a intentarlo. Puedes hacer esto tantas veces como quieras.</p>
    </div>
    <div class="faq">
        <div>
            <h3>Nombre erróneo en el certificado</h3>
            <div class="botones">

            @auth
            <?php if (auth()->user()->isTeacher()) : ?>
                    <x-editar />
                    <x-eliminar />
                    <?php endif; ?>
                    @endauth
                    
                    <i class="fa-solid fa-circle-plus desplegarFaq"></i>
                    <i class="fa-solid fa-circle-minus plegarFaq hidden"></i>
                </div>
        </div>
        <p class="respuesta hidden">Después de verificar, mi nombre está mal escrito en el certificado Esto sucede a veces. Puedes ponerte en contacto con el servicio de asistencia de Coursera y te lo arreglarán.</p>
    </div>

    @auth
    <?php if (auth()->user()->isTeacher()) : ?>
        <div class="nuevofaq">
            <a href="" class="plus-link">
                <x-plus-icon />
            </a>
        </div>
    <?php endif; ?>
    @endauth
</div>
<script src="{{asset('js/dom-views.js')}}"></script>

@endsection