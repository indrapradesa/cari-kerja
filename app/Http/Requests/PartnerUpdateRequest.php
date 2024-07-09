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
            'type_partner' => 'required|in:umkm,company',
            'phone_number' => 'required|integer|min:11',
            'address' => 'required|string|max:100',
            'link_instagram' => 'sometimes|nullable|regex:/^(https?:\/\/)?(www\.)?(instagram\.com)(\/[a-zA-Z0-9_.-]+)?/',
            'link_facebook' => 'sometimes|nullable|regex:/^(https?:\/\/)?(www\.)?(facebook\.com)(\/[a-zA-Z0-9_.-]+)?/',
            'link_linkedin' => 'sometimes|nullable|regex:/^(https?:\/\/)?(www\.)?(linkedin\.com)(\/[a-zA-Z0-9_.-]+)?/',
            'link_web' => 'sometimes|nullable|regex:/^(https?:\/\/)[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}([a-zA-Z0-9_.-\/]+)?/',
            'description' => 'nullable|string|max:100',
            'status' => 'required|in:active,suspend,termint',
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
