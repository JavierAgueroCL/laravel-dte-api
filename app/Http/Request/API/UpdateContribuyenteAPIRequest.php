<?php

namespace App\Http\Request\API;

use App\Models\Contribuyente;
use App\Http\Request\APIRequest;

class UpdateContribuyenteAPIRequest extends APIRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return Contribuyente::$rules;
    }
}
