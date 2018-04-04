<?php

namespace App\Modules\Companies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Library\Eloquent\Company;

class ToggleCompanyStatus extends Controller
{
    public function __invoke(Company $company, Request $request)
    {
        if ($request->get('block')) {
            $company->update(['blocked_at' => now()]);

            return redirect('/companies')->with('success', __('Company successfully blocked!'));
        }

        $company->update(['blocked_at' => null]);

        return redirect('/companies')->with('success', __('Company successfully unblocked!'));
    }
}