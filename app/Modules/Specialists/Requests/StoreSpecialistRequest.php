<?php

namespace App\Modules\Specialists\Requests;

use App\Http\Contracts\Baggable;
use Library\Http\Requests\BaseFormRequest;
use App\Modules\Specialists\Bags\SpecialistBag;
use App\Modules\Users\Bags\UserBag;
use Illuminate\Validation\Rule;

class StoreSpecialistRequest extends BaseFormRequest implements Baggable
{
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|min:6',
            'role' => 'string'
        ];
    }

    public function convertsToBag()
    {
        return new SpecialistBag(
            $this->validated()
        );
    }
}