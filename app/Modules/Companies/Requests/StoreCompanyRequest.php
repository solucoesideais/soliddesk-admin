<?php

namespace App\Modules\Companies\Requests;

use Library\Http\Requests\BaseFormRequest;

class StoreCompanyRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|min:5',
            'logo' => 'image'
        ];
    }
}