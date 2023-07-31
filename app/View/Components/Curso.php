<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Curso extends Component
{
    /**
     * Create a new component instance.
     */
    public $cursos;

    public function __construct($cursos = [])
    {
        $this->cursos = $cursos;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.curso');
        // $cursos = [
        //     [
        //         "title" => "Aspectos básicos de la asistencia técnica",
        //         "duration" => "3",
        //         "description" => "Primer curso de una serie que prepara para un rol en soporte de TI. Cubre hardware, software, resolución de problemas, servicio al cliente y preparación para entrevistas técnicas."
        //     ],
        // ];

        // return view('components.curso', [
        //     'cursos' => $cursos,
        // ]);
    }
}

