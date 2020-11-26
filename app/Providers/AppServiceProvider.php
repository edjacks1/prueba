<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

//Componentes de blade
use App\View\Components\InputComponent;
use App\View\Components\TextAreaComponent;
use App\View\Components\ModalComponent;


class AppServiceProvider extends ServiceProvider{

    public function register()
    {
        //
    }

    public function boot(){
        //Registro de componentes
        Blade::component('input',     InputComponent::class);
        Blade::component('text-area', TextAreaComponent::class);
        Blade::component('modal',     ModalComponent::class);
    }
}
