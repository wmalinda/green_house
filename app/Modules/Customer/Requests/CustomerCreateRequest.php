<?php

namespace App\Modules\Customer\Requests;

use App\Http\Requests\Validator;
use App\Modules\Base\Requests\BaseRequest;

class CustomerCreateRequest extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'code' => 'required|unique:customers',
            //'brc_no' => 'unique:customers',
            //'email' => 'unique:customers',
            //'email' => 'sometimes|unique:customers',
            'address' => 'required',
            'category' => 'required',
            'credit_period' => 'required',
            'credit_limit' => 'required',
        ];
    }
}
