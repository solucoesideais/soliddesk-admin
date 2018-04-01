<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Departments\DisplaysDepartments;

Route::get('/departments', DisplaysDepartments::class);
