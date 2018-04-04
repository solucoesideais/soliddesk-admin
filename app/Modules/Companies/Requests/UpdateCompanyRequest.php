<?php

namespace App\Modules\Companies\Requests;

use App\Http\Requests\BaseFormRequest;

class UpdateCompanyRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
            'name' => 'string|min:5',
        ];
    }
}