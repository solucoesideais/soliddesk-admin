<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewsServiceProvider extends ServiceProvider
{
    public function register()
    {
        View::addNamespace('auth', app_path('Modules/Auth/resources/views'));
        View::addNamespace('home', app_path('Modules/Home/resources/views'));
        View::addNamespace('administrators', app_path('Modules/Administrators/resources/views'));
        View::addNamespace('departments', app_path('Modules/Departments/resources/views'));
        View::addNamespace('users', app_path('Modules/Users/resources/views'));
        View::addNamespace('companies', app_path('Modules/Companies/resources/views'));

    }
}
