<?php

namespace App\Modules\Companies;

use App\Http\Controllers\Controller;
use App\Modules\Companies\Requests\UpdateCompanyRequest;
use Library\Eloquent\Company;

class UpdatesCompanies extends Controller
{
    public function __invoke(Company $company, UpdateCompanyRequest $request)
    {
        $company->update($request->validated());

        return redirect('/companies')->with('success', 'Company was successfully updated!');
    }
}