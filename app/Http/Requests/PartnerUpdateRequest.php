<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
        return $this->method('patch');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'company_name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone_number' => 'required|integer|min:11',
            'type_partner' => 'required|in:umkm,company',
            'status' => 'required|in:active,suspend,termint',
            'description' => 'nullable|string|max:100',
        ];
    }

    // public function messages(): array
    // {
    //     return [
    //         'company_name.required' => ,
    //         'company_name.string' => ,
    //         'company_name.max' => ,
    //         'email.required' => ,
    //         'email.email' => ,
    //         'phone_number.required' => ,
    //         'phone_number.integer' => ,
    //         'phone_number.min' => ,
    //         'type_partner.required' => ,
    //         'type_partner.in' => ,
    //         'type_partner.required' => ,
    //         'status.required' => ,
    //         'status.in' => ,
    //         'description.string' => ,
    //         'description.max' => ,
    //     ];
    // }
}
