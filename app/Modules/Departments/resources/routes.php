<?php

use App\Modules\Departments\CreatesDepartmentsForm;
use App\Modules\Departments\DeletesDepartments;
use App\Modules\Departments\DisplaysDepartments;
use App\Modules\Departments\StoresDepartments;
use Illuminate\Support\Facades\Route;

Route::get('/departments', DisplaysDepartments::class);
Route::get('/departments/create', CreatesDepartmentsForm::class);
Route::post('/departments', StoresDepartments::class);
Route::delete('/departments/{department}', DeletesDepartments::class);
