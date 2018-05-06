<?php

namespace App\Modules\Administrators\Requests;

use App\Http\Contracts\Baggable;
use Library\Http\Requests\BaseFormRequest;
use App\Modules\Administrators\Bags\AdministratorBag;
use Illuminate\Validation\Rule;

class StoreAdministratorRequest extends BaseFormRequest implements Baggable
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => ['required', 'email', Rule::unique('administrators', 'email')],
            'password' => 'required|min:6'
        ];
    }

    public function convertsToBag(): AdministratorBag
    {
        return new AdministratorBag(
            $this->validated()
        );
    }


}