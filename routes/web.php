<?php

use App\Http\Controllers\Admin\CandidateController;
use App\Http\Controllers\Admin\CompanyJobController;
use App\Http\Controllers\Admin\JobCategoryController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ServicePackageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Partners\JobAplicantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.main');
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('admin')->name('admin.')->middleware(['auth', 'occupation:super-admin'])->group(function () {
    Route::prefix('partners')->name('partners.')->controller(PartnerController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create-new-partner', 'create')->name('create');
        Route::post('/store-partner', 'store')->name('store');
        Route::get('/{partnerId}/show', 'show')->name('show');
        Route::get('/{partnerId}/edit', 'edit')->name('edit');
        Route::patch('/{partnerId}/update-data', 'update')->name('update');
    });

    Route::prefix('loker-partners')->name('loker-partners.')->controller(CompanyJobController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::patch('/{id}/update', 'update')->name('update');
        Route::patch('/{id}/update-status', 'updateStatus')->name('updateStatus');
        Route::get('/{id}/show', 'show')->name('show');
    });

    Route::prefix('categories')->name('categories.')->controller(JobCategoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/create', 'store')->name('store');
        Route::get('/{id}/find', 'show')->name('show');
        Route::post('/update', 'update')->name('update');
    });

    Route::prefix('packages')->name('packages.')->controller(ServicePackageController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/find', 'show')->name('find');
        Route::post('/update', 'update')->name('update');
        Route::post('/update-status', 'updateStatus')->name('updateStatus');
        Route::delete('/{id}/delete', 'delete')->name('delete');
    });

    Route::prefix('candidates')->name('candidates.')->controller(CandidateController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{id}/find', 'show')->name('show');
    });
});

Route::prefix('partners')->name('partners.')->middleware(['auth', 'occupation:partner'])->group(function () {
    Route::get('/dashboard', function () {
        return view('partners.index');
    })->name('dashboard');
    Route::prefix('job-aplicants')->name('jobAplicants.')->controller(JobAplicantController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/create-job', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::patch('/{id}/update', 'update')->name('update');
        Route::patch('/{id}/update-status', 'updateStatus')->name('updateStatus');
        Route::get('/{id}/show', 'show')->name('show');
        Route::delete('/{id}/delete', 'destroy')->name('destroy');
    });
});

Route::prefix('job-sekkers')->name('job-sekkers.')->middleware(['auth', 'occupation:job-sekker'])->group(function () {
    Route::get('/dashboard', function () {
        return view('job-seeker.index');
    })->name('dashboard');
});

