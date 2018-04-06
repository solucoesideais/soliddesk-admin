<?php

use Illuminate\Support\Facades\Route;

Route::group([], app_path('Modules/Auth/resources/routes.php'));
Route::group(['middleware' => 'auth'], function () {
    Route::group([], app_path('Modules/Home/resources/routes.php'));
    Route::group([], app_path('Modules/Administrators/resources/routes.php'));
    Route::group([], app_path('Modules/Departments/resources/routes.php'));
    Route::group([], app_path('Modules/Users/resources/routes.php'));
    Route::group([], app_path('Modules/Companies/resources/routes.php'));
    Route::group([], app_path('Modules/Specialists/resources/routes.php'));
});
