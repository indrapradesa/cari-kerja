<?php

use App\Http\Controllers\Admin\JobCategoryController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ServicePackageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.dashboard');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::prefix('partners')->name('partners.')->controller(PartnerController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create-new-partner', 'create')->name('create');
        Route::post('/store-partner', 'store')->name('store');
        Route::get('/{partnerId}/show', 'show')->name('show');
        Route::get('/{partnerId}/edit', 'edit')->name('edit');
        Route::patch('/{partnerId}/update-data', 'update')->name('update');
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
});

