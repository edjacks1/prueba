<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputComponent extends Component
{

    public $tipo;
    public $atributo;
    public $nombreDisplay;
    public $valor;

    public function __construct($tipo,$atributo,$nombreDisplay,$valor = '' ){
        $this->tipo          = $tipo;
        $this->atributo      = $atributo;
        $this->nombreDisplay = $nombreDisplay;
        $this->valor         = $valor;
    }

    public function render(){
        return view('components.input');
    }
}
