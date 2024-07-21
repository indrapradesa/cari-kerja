<?php

namespace App\Http\Requests\Admin;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreJobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    // /**
    //  * Prepare the data for validation.
    //  */
    // protected function prepareForValidation(): void
    // {
    //     $this->merge([
    //         'slug' => Str::title($this->job_title),
    //     ]);
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'partner_id' => ['required', 'exists:partners,id'],
            'job_title' => ['required', 'string', 'max:100'],
            'type_job' => ['required', 'in:WFH,WFO,Hybrid'],
            'location' => ['required', 'string', 'max:100'],
            'job_description' => ['required', 'string'],
            'salary_min' => ['required', 'numeric', 'min:1'],
            'salary_max' => ['sometimes', 'numeric', 'min:1'],
            'date_posted' => ['required'],
            'date_closing' => ['required'],
            'category_id' => ['required', 'exists:categories,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'job_title.required' => 'Nama Loker tidak boleh kosong!',
            'job_title.string' => 'Nama Loker harus text!',
            'job_title.max' => 'Nama Loker terlalu panjang!',
            'type_job.required' => 'Tipe Loker tidak boleh kosong!',
            'type_job.in' => 'Tipe Loker tidak valid!',
            'location.required' => 'Lokasi Loker tidak boleh kosong!',
            'location.string' => 'Lokasi Loker harus text!',
            'location.max' => 'Lokasi Loker terlalu panjang!',
            'salary_min.required' => 'Max. Salary tidak boleh kosong!',
            'salary_min.integer' => 'Max. Salary harus angka',
            'salary_min.min' => 'Max. Salary terlalu kecil!',
            'salary_max.integer' => 'Harga harus angka!',
            'salary_max.min' => 'Harga terlalu terlalu kecil!',
            'date_posted.required' => 'Tanggal buka tikak boleh kosong!',
            'date_posted.date' => 'Tanggal buka harus berupa tanggal!',
            'date_posted.date_format' => 'Format Tanggal buka tidak valid!',
            'date_closing.required' => 'Tanggal tutup tikak boleh kosong!',
            'date_closing.date' => 'Tanggal tutup harus berupa tanggal!',
            'date_closing.date_format' => 'Format Tanggal tutup tidak valid!',
            'category_id.required' => 'Kategori loker tidak boleh kosong!',
            'category_id.exists' => 'Kategori loker tidak valid!',
        ];
    }
}
