<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ModalComponent extends Component
{

    public $id;
    public $tamanio;
    public $titulo;
    public $accion;

    public function __construct($id,$tamanio,$titulo,$accion ){
        $this->id              =  $id     ;
        $this->tamanio         =  $tamanio;
        $this->titulo          =  $titulo ;
        $this->accion          =  $accion ;
    }

    public function render(){
        return view('components.modal');
    }
}
