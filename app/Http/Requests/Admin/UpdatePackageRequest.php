<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePackageRequest extends FormRequest
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
            'id' => ['required', 'exists:packages,id'],
            'name_package' => ['required', 'string', 'max:100'],
            'max_posting' => ['required', 'integer', 'min:1'],
            'max_highlight' => ['required', 'integer', 'min:1'],
            'day_duration' => ['required', 'integer', 'min:0'],
            'price' => ['required', 'integer', 'min:1'],
            'discount' => ['sometimes']
        ];
    }
}
