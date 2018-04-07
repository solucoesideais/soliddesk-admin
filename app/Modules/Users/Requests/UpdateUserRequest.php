<?php

namespace App\Modules\Users\Requests;

use App\Http\Contracts\Baggable;
use App\Http\Requests\BaseFormRequest;
use App\Modules\Users\Bags\UserBag;
use Illuminate\Validation\Rule;
use Library\Auth\UserType;

/**
 * @property \Library\Eloquent\Auth\User user
 */
class UpdateUserRequest extends BaseFormRequest implements Baggable
{
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignoreModel($this->user)],
            'company' => ['required', Rule::exists('companies', 'id')],
            'type' => ['required', Rule::in(UserType::options())]
        ];
    }

    public function convertsToBag()
    {
        return new UserBag(
            $this->validated()
        );
    }
}