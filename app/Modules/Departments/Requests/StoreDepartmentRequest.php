<?php

namespace App\Modules\Departments\Requests;

use Library\Http\Requests\BaseFormRequest;

class StoreDepartmentRequest extends BaseFormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:3',
        ];
    }
}