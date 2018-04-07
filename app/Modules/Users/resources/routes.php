<?php

use App\Modules\Users\CreatesUsers;
use App\Modules\Users\DisplaysUsers;
use App\Modules\Users\EditUsersForm;
use App\Modules\Users\StoresUsers;
use App\Modules\Users\UpdatesUsers;
use Illuminate\Support\Facades\Route;

Route::get('/users', DisplaysUsers::class);
Route::get('/users/create', CreatesUsers::class);
Route::get('/users/{user}/edit', EditUsersForm::class);
Route::patch('/users/{user}', UpdatesUsers::class);
Route::post('/users', StoresUsers::class);
