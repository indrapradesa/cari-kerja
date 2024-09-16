@extends('layouts.main')

@section('container')
    <div class="bg-white py-24 sm:py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-full lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">From the blog</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">perusahaan start up yang bergerak di bidang konsultan dan jasa bisnis, menyediakan layanan konsultasi bagi pekerja untuk mempersiapkan karir yang sesuai dengan potensi, serta berdedikasi membantu memenuhi kebutuhan SDM perusahaan dari berbagai ukuran industri</p>
        </div>
        <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            @include('blogs.article')
            <!-- More posts... -->
        </div>
        </div>
    </div>
@endsection
