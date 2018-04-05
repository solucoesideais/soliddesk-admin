<?php

use App\Modules\Companies\CompaniesDepartmentForm;
use App\Modules\Companies\CreatesCompanies;
use App\Modules\Companies\DisplaysCompanies;
use App\Modules\Companies\EditCompaniesForm;
use App\Modules\Companies\LinkDepartmentsToCompany;
use App\Modules\Companies\StoresCompanies;
use App\Modules\Companies\ToggleCompanyStatus;
use App\Modules\Companies\UpdatesCompanies;
use Illuminate\Support\Facades\Route;

Route::get('/companies', DisplaysCompanies::class);
Route::get('/companies/create', CreatesCompanies::class);
Route::post('/companies', StoresCompanies::class);
Route::get('/companies/{company}/edit', EditCompaniesForm::class);
Route::patch('/companies/{company}', UpdatesCompanies::class);
Route::patch('/companies/{company}/status', ToggleCompanyStatus::class);
Route::get('/companies/{company}/departments', CompaniesDepartmentForm::class);
Route::post('/companies/{company}/departments', LinkDepartmentsToCompany::class);
