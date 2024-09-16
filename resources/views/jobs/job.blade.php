<a href="{{ route('jobs.show', $job->id) }}">
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex">
            <h6 class="text-lg font-bold dark:text-white">{{ $job->job_title }}</h6>
            <p class="text-sm text-gray-600 font-semibold ml-auto">@php
                $salary = $job->salary_min / 1000000; // Ubah jadi jutaan
            @endphp
            {{ $salary == floor($salary) ? "Rp " . number_format($salary, 0, ',', '.') . ' Jt' : "Rp " . number_format($salary, 1, ',', '.') . ' Jt' }}</p>
        </div>
        <div class="mt-2 space-y-2 font-medium border-t border-gray-200 dark:border-gray-500"></div>
        <div class="py-2">
            <h5 class="mb-2 text-xl font-bold dark:text-white">{{ $job->partner->company_name }}</h5>
            <div class="flex space-x-2 justify-items-center">
                <svg class="h-4 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                </svg>
                <p class="text-sm text-gray-600">
                    {{ $job->location }}
                </p>
            </div>
        </div>
        <div class="pt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-500"></div>
        <div>
            <p class="text-sm text-gray-600">{{ $job->created_at->diffForHumans() }}</p>
        </div>
    </div>
</a>
