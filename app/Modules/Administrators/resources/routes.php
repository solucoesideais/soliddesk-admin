<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Administrators\CreatesAdministratorsForm;
use App\Modules\Administrators\StoresAdministrators;
use App\Modules\Administrators\DisplaysAdministrators;
use App\Modules\Administrators\resources\DeletesAdministrators;

Route::get('/administrators', DisplaysAdministrators::class);
Route::get('/administrators/create', CreatesAdministratorsForm::class);
Route::post('/administrators', StoresAdministrators::class);
Route::delete('/administrators/{administrator}', DeletesAdministrators::class);