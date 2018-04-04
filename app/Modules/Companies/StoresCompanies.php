<?php

namespace App\Modules\Companies;

use App\Http\Controllers\Controller;
use App\Modules\Companies\Requests\StoreCompanyRequest;
use Library\Eloquent\Company;

class StoresCompanies extends Controller
{
    public function __invoke(Company $company, StoreCompanyRequest $request)
    {
        $company->create([
            'name' => $request->get('name')
        ]);

        return redirect('/companies')->with('success', 'Company successfully created!');
    }
}