<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextAreaComponent extends Component
{

    public $tipo;
    public $atributo;
    public $nombreDisplay;

    public function __construct($tipo,$atributo,$nombreDisplay ){
        $this->tipo          = $tipo;
        $this->atributo      = $atributo;
        $this->nombreDisplay = $nombreDisplay;
    }

    public function render()
    {
        return view('components.text-area');
    }
}
