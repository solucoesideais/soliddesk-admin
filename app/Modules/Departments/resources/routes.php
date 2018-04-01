<?php

use App\Modules\Departments\StoresDepartments;
use App\Modules\Departments\DisplaysDepartments;
use Illuminate\Support\Facades\Route;
use App\Modules\Departments\DeletesDepartments;

Route::get('/departments', DisplaysDepartments::class);
Route::post('/departments', StoresDepartments::class);
Route::delete('/departments/{department}', DeletesDepartments::class);
