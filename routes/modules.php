<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], app_path('Modules/Home/resources/routes.php'));