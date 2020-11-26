<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\InputComponent;


class AppServiceProvider extends ServiceProvider{

    public function register()
    {
        //
    }

    public function boot(){
        Blade::component('input', InputComponent::class);

    }
}
