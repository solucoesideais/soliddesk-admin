<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseFormRequest extends FormRequest
{
    const FORM_ERROR_BAG = 'form';

    protected $errorBag = self::FORM_ERROR_BAG;

    public function authorize()
    {
        return true;
    }
}