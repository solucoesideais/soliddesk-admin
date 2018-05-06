<?php

namespace App\Modules\Companies;

use App\Http\Controllers\Controller;
use App\Modules\Companies\Requests\StoreCompanyRequest;
use Library\Eloquent\Company;
use Library\Storage\Disk;

class StoresCompanies extends Controller
{
    public function __invoke(Company $company, StoreCompanyRequest $request)
    {
        $company->create([
            'name' => $request->get('name'),
            'logo' => optional($request->file('logo'))->hashName() ?? 'default-avatar.png'
        ]);

        if ($request->hasFile('logo')) {
            $request->file('logo')->store('/', Disk::COMPANIES);
        }

        return redirect('/companies')->with('success', 'Company successfully created!');
    }
}