<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');
Route::resource('vegetables', 'AdminAuth\VegetableController');
Route::resource('stores', 'AdminAuth\StoreController');
Route::resource('merchants', 'AdminAuth\MerchantController');
Route::resource('customers', 'AdminAuth\CustomerController');