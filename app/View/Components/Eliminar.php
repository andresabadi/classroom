<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Eliminar extends Component
{
    public $competencia;
    public $curso;
    public $modulo;

    /**
     * Create a new component instance.
     */
    public function __construct($competencia = null, $curso = null, $modulo = null)
    {
        $this->competencia = $competencia;
        $this->curso = $curso;
        $this->modulo = $modulo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.eliminar');
    }

    // public $competencia;
    // /**
    //  * Create a new component instance.
    //  */
    // public function __construct($competencia)
    // {
    //     $this->competencia = $competencia;
    // }

    // /**
    //  * Get the view / contents that represent the component.
    //  */
    // public function render(): View|Closure|string
    // {
    //     return view('components.eliminar');
    // }
}
