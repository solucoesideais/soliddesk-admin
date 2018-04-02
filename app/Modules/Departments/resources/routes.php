<?php

use App\Modules\Departments\CreatesDepartmentsForm;
use App\Modules\Departments\DeletesDepartments;
use App\Modules\Departments\DepartmentCompaniesForm;
use App\Modules\Departments\DisplaysDepartments;
use App\Modules\Departments\EditDepartmentsForm;
use App\Modules\Departments\StoresDepartments;
use Illuminate\Support\Facades\Route;

Route::get('/departments', DisplaysDepartments::class);
Route::get('/departments/create', CreatesDepartmentsForm::class);
Route::get('/departments/create', EditDepartmentsForm::class);
Route::post('/departments', StoresDepartments::class);
Route::delete('/departments/{department}', DeletesDepartments::class);
Route::get('/departments/{department}/companies', DepartmentCompaniesForm::class);
