<?php

namespace App\Modules\Users\Requests;

use App\Http\Contracts\Baggable;
use App\Http\Requests\BaseFormRequest;
use App\Modules\Users\Bags\UserBag;
use Illuminate\Validation\Rule;

class StoreUserRequest extends BaseFormRequest implements Baggable
{
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|min:6',
            'company' => ['required', Rule::exists('companies', 'id')]
        ];
    }

    public function convertsToBag()
    {
        return new UserBag(
            $this->validated()
        );
    }
}