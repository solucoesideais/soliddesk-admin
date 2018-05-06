<?php

namespace App\Modules\Users\Requests;

use App\Http\Contracts\Baggable;
use Library\Http\Requests\BaseFormRequest;
use App\Modules\Users\Bags\UserBag;
use Illuminate\Validation\Rule;
use Library\Auth\UserType;
use Library\Eloquent\Company;

class StoreUserRequest extends BaseFormRequest implements Baggable
{
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|string|min:6',
            'company' => ['required', Rule::exists('companies', 'id')],
            'department' => [Rule::exists('departments', 'id'), Rule::in($this->departments())],
            'type' => ['required', Rule::in(UserType::options())]
        ];
    }

    public function convertsToBag()
    {
        return new UserBag(
            $this->validated()
        );
    }

    private function departments(): array
    {
        $company = Company::find($this->get('company'));

        if ($company) {
            return $company->departments->pluck('id')->toArray();
        }

        return [];
    }
}