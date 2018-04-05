<?php

use App\Modules\Users\CreatesUsers;
use App\Modules\Users\DisplaysUsers;
use App\Modules\Users\StoresUsers;
use Illuminate\Support\Facades\Route;

Route::get('/users', DisplaysUsers::class);
Route::get('/users/create', CreatesUsers::class);
Route::post('/users', StoresUsers::class);
