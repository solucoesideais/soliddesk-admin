<?php

namespace App\Modules\Companies\Requests;

use App\Http\Requests\BaseFormRequest;

class StoreCompanyRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|min:5'
        ];
    }
}