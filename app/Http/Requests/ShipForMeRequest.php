<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShipForMeRequest extends FormRequest
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
        return [
            'product_name' => 'required|string',
            'product_weight' => 'required|integer',
            'product_quantity' => 'required|integer',
            'recvr_name' => 'required|string',
            'recvr_phn_number1' => 'required|min:11|numeric',
            'recvr_phn_number2' => 'numeric|min:11|nullable',
            'recvr_address' => 'required|string',
            'recvr_upazila' => 'required|string',
            'recvr_zila' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'product_weight.integer' => 'Product Weight Should Be Integer',
            'recvr_phn_number1.min' => 'Receiver Phone Number Minimum 11 Digit',
        ];
    }
}
