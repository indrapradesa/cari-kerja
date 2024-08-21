<?php

namespace App\Http\Requests\Partners;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class UpdateJobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->method('patch');
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'date_posted' => Carbon::createFromFormat('d/F/Y', $this->date_posted)->format('Y-m-d'),
            'date_closing' => Carbon::createFromFormat('d/F/Y', $this->date_closing)->format('Y-m-d'),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'job_title' => ['required', 'string', 'max:100'],
            'type_job' => ['required', 'in:WFH,WFO,Hybrid'],
            'category_id' => ['required', 'exists:categories,id'],
            'location' => ['required', 'string', 'max:100'],
            'date_posted' => ['required', 'date_format:Y-m-d'],
            'date_closing' => ['required', 'date_format:Y-m-d'],
            'salary_min' => ['required', 'numeric'],
            'salary_max' => ['sometimes', 'numeric'],
            'job_description' => ['required', 'string'],
        ];
    }
}
