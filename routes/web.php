<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/users', 'admin.pages.user')->name('admin.users');
Route::view('/products', 'admin.pages.product')->name('admin.products');
Route::view('/control', 'admin.pages.admin_control')->name('admin.page.admin_control');
