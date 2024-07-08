<?php

use App\Http\Controllers\Admin\PartnerController;
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
});

