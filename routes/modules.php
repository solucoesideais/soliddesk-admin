<?php

use Illuminate\Support\Facades\Route;

Route::group([], app_path('Modules/Auth/resources/routes.php'));
Route::group(['middleware' => 'auth'], app_path('Modules/Home/resources/routes.php'));