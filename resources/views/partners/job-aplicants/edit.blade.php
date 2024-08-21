@extends('layouts.dashboard')

@section('container')
    <nav class="flex mb-4" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="#"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg>
                    Home
                </a>
            </li>
            <li aria-current="page">
                <a href="{{ route('admin.loker-partners.index') }}"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-medium text-gray-700 md:ms-2 dark:text-gray-400">Data Loker</span>
                    </div>
                </a>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <a href="{{ route('partners.jobAplicants.show', $job->id) }}"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 text-gray-400 mx-1 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-medium text-gray-700 md:ms-2 dark:text-gray-400">{{ $job->job_title }}</span>
                    </a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-3 h-3 text-gray-400 mx-1 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Update</span>
                </div>
            </li>
        </ol>
    </nav>

    @if ($errors->any())
        <div id="alert-2" class="flex p-4 my-5 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                {{ $errors }}
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif

    @if (session()->has('error'))
        <div id="alert-2" class="flex p-4 my-5 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                {{ session('error') }}
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif

    <div class="bg-white p-4 rounded-lg">
        <form id="createForm" action="{{ route('partners.jobAplicants.update', $job->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-2 grid gap-4 sm:grid-cols-2">
                <div>
                    <label for="job_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Loker</label>
                    <input id="job_title" name="job_title" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('job_title') is-invalid
                  @enderror"
                        value="{{ old('job_title', $job->job_title) }}" placeholder="Nama Loker" autocomplete="off"
                        required>
                    @error('job_title')
                        <div class="invalid-feedback text-gray-900 dark:text-white">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="type_job" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Jenis
                        Loker</label>
                    <select id="type_job" name="type_job"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">--Jenis Loker--</option>
                        <option value="WFO" {{ $job->type_job == 'WFO' ? 'selected' : '' }}>WFO</option>
                        <option value="WFH" {{ $job->type_job == 'WFH' ? 'selected' : '' }}>WFH</option>
                        <option value="Hybrid" {{ $job->type_job == 'Hybrid' ? 'selected' : '' }}>Hybrid</option>
                    </select>
                </div>
                <div>
                    <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori
                        Loker</label>
                    <select id="category_id" name="category_id"
                        class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500"
                        required>
                        <option selected>--Pilih Kategori--</option>
                        @foreach ($categories as $category)
                            @if (old('category_id', $job->category_id) == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name_category }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name_category }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi
                        Loker</label>
                    <input id="location" name="location" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('location') is-invalid
                  @enderror"
                        value="{{ old('location', $job->location) }}" placeholder="Lokasi Loker" autocomplete="off"
                        required>
                    @error('location')
                        <div class="invalid-feedback text-gray-900 dark:text-white">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="relative max-w">
                    <label for="date_posted" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                        Buka</label>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 mt-6 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input datepicker datepicker-format="dd/MM/yyyy" type="text" autocomplete="off" id="date_posted"
                        name="date_posted"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500"
                        placeholder="Pilih Tanggal" value="{{ old('date_posted', \Carbon\Carbon::parse($job->date_posted)->isoFormat('dd/MM/yyyy')) }}" required>
                </div>
                <div class="relative max-w">
                    <label for="date_closing" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                        Tutup</label>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 mt-6 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input datepicker datepicker-format="dd/MM/yyyy" type="text" autocomplete="off" id="date_closing"
                        name="date_closing"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500"
                        placeholder="Pilih Tanggal" value="{{ old('date_closing', \Carbon\Carbon::parse($job->date_closing)->isoFormat('dd/MM/yyyy')) }}" required>
                </div>
                <div>
                    <label for="salary_min" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Min.
                        Gaji</label>
                    <input id="salary_min" name="salary_min" type="number"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('salary_min') is-invalid
                  @enderror"
                        value="{{ old('salary_min', $job->salary_min) }}" placeholder="Min. Gaji" autocomplete="off"
                        required>
                    @error('salary_min')
                        <div class="invalid-feedback text-gray-900 dark:text-white">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="salary_max" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Max.
                        Gaji (Isi Jika Ada Range Gaji)</label>
                    <input id="salary_max" name="salary_max" type="number"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('salary_max') is-invalid
                  @enderror"
                        value="{{ old('salary_max', $job->salary_max) }}" placeholder="Max. Gaji" autocomplete="off"
                        required>
                    @error('salary_max')
                        <div class="invalid-feedback text-gray-900 dark:text-white">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <label for="job_description"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Pekerjaan</label>
                <textarea id="job_description" name="job_description" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tulis keterangan tentang loker...">{{ old('job_description', $job->job_description) }}</textarea>
            </div>
            <div class="flex items-center space-x-4">
                <button type="submit" id="createButton"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Update Loker
                </button>
            </div>
        </form>
    </div>
@endsection
