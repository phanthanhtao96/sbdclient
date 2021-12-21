<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

// Route Login
Route::get('/login', function () {
    return view('account.login');
});

// Route Register
Route::get('/register', function () {
    return view('account.register');
});

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});

Route::get('/service', function () {
    return view('layouts.service');
});

Route::get('/service-addnew', function () {
    return view('layouts.service_addnew');
});

Route::get('/order', function () {
    return view('layouts.orders.order');
});

Route::get('/order-detail', function () {
    return view('layouts.orders.order_detail');
});

Route::get('/bill', function () {
    return view('layouts.bill');
});

Route::get('/cart', function () {
    return view('layouts.cart');
});

Route::get('/payment', function () {
    return view('layouts.payment');
});

Route::get('/ticket', function () {
    return view('layouts.tickets.ticket');
});

Route::get('/ticket-detail', function () {
    return view('layouts.tickets.ticket_detail');
});

Route::get('/ticket-addnew', function () {
    return view('layouts.tickets.ticket_addnew');
});

Route::get('/update-user', function () {
    return view('layouts.users.update_user');
});

Route::get('/change-password', function () {
    return view('layouts.users.change_password');
});
