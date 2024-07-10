<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StorePackageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name_package' => ['required', 'string', 'max:100'],
            'max_posting' => ['required', 'integer', 'min:1'],
            'max_highlight' => ['required', 'integer', 'min:1'],
            'day_duration' => ['required', 'integer', 'min:0'],
            'price' => ['required', 'integer', 'min:1'],
            'discount' => ['sometimes', 'integer']
        ];
    }

    public function messages(): array
    {
        return [
            'name_package.required' => 'Nama Paket tidak boleh kosong!',
            'name_package.integer' => 'Nama Paket harus number!',
            'name_package.max' => 'Nama Paket terlalu panjang!',
            'max_posting.required' => 'Max. posting tidak boleh kosong!',
            'max_posting.integer' => 'Max. posting harus number!',
            'max_posting.min' => 'Max. posting min 1!',
            'max_highlight.required' => 'Max. Highlight tidak boleh kosong!',
            'max_highlight.integer' => 'Max. Highlight harus number!',
            'max_highlight.min' => 'Max. Highlight min 1!',
            'day_duration.required' => 'Durasi hari tidak boleh kosong!',
            'day_duration.integer' => 'Durasi hari harus angka',
            'day_duration.min' => 'Durasi hari min. 1',
            'price.required' => 'Harga tidak boleh kosong!',
            'price.integer' => 'Harga harus angka!',
            'price.max' => 'Harga terlalu panjang!',
            'discount.integer' => 'Diskon harus number!',
        ];
    }
}
