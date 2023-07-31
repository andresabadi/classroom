<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Leccion extends Component
{
    /**
     * Create a new component instance.
     */
    public $modulos;

    public function __construct($modulos = [])
    {
        $this->modulos = $modulos;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.leccion');
    }
}
