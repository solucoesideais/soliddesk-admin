<?php

use App\Modules\Administrators\CreatesAdministratorsForm;
use App\Modules\Administrators\DeletesAdministrators;
use App\Modules\Administrators\DisplaysAdministrators;
use App\Modules\Administrators\StoresAdministrators;
use Illuminate\Support\Facades\Route;

Route::get('/administrators', DisplaysAdministrators::class);
Route::get('/administrators/create', CreatesAdministratorsForm::class);
Route::post('/administrators', StoresAdministrators::class);
Route::delete('/administrators/{administrator}', DeletesAdministrators::class);