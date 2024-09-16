@extends('layouts.main')

@section('container')

<div class="mt-4 row justify-content-center mb-3">
    <form action="/jobs" class="max-w-md mx-auto">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="search" name="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ request('search') }}" placeholder="Search Loker..." />
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>
    </form>
</div>

<div class="p-4">
    <div class="p-4 grid grid-cols-1 md:grid-cols-4 gap-4">
        @foreach ( $jobs as $job )
            <div class="shadow-lg">
                @include('jobs.job')
            </div>
        @endforeach
    </div>
    {{ $jobs->links() }}
</div>

{{-- <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden">
    <div class="px-6 py-4 bg-gray-200">
        <h5 class="text-lg font-bold">Title</h5>
        <p class="text-sm text-gray-600">company</p>
    </div>
    <div class="px-6 py-4">
        <p class="text-gray-600">deskripso</p>
        <ul class="list-none mb-4">
            @foreach($jobRequirements as $requirement)
                <li class="text-sm text-gray-600">Rqe</li>
            @endforeach
        </ul>
    </div>
    <div class="px-6 py-4 bg-gray-100">
        <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
            Button
        </button>
    </div>
    <div class="px-6 py-4 bg-gray-200">
        <p class="text-sm text-gray-600">type | location</p>
    </div>
</div> --}}

@endsection
