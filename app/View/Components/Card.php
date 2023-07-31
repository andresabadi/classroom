<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     *
     * @var \Illuminate\Support\Collection|array
     */
    public $competencias;

    public function __construct($competencias = [])
    {
        $this->competencias = $competencias;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.card');
    }
}
