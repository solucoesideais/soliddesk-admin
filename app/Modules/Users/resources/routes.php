<?php

use App\Modules\Users\CreatesUsers;
use App\Modules\Users\DisplaysUsers;
use Illuminate\Support\Facades\Route;

Route::get('/users', DisplaysUsers::class);
Route::get('/users/create', CreatesUsers::class);
