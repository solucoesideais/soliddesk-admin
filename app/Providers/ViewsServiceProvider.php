<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewsServiceProvider extends ServiceProvider
{
    public function register()
    {
        View::addNamespace('home', app_path('Modules/Home/resources/views'));
    }
}
