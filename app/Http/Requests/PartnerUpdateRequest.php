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

    public function messages(): array
    {
        return [
            'company_name.required' => 'Nama partner tidak boleh kosong!',
            'company_name.string' => 'Nama partner harus text!',
            'company_name.max' => 'Nama partner terlalu panjang!',
            'email.required' => 'email tidak boleh kosong!',
            'email.email' => 'email tidak valid!',
            'type_partner.required' => 'Tipe partner tidak boleh kosong!',
            'type_partner.in' => 'Tipe partner tidak valid!',
            'phone_number.required' => 'Nomor telephone tidak boleh kosong!',
            'phone_number.integer' => 'Nomor telephone harus angka',
            'phone_number.min' => 'Nomor telephone min. 11',
            'address.required' => 'Alamat tidak boleh kosong!',
            'address.string' => 'Alamat harus text!',
            'address.max' => 'Alamat terlalu panjang!',
            'description.string' => 'Deskripsi harus text!',
            'description.max' => 'Deskripsi terlalu panjang!',
            'status.required' => 'Status tidak boleh kosong!',
            'status.in' => 'Status tidak valid!',
        ];
    }
}
