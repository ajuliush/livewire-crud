<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CreateCustomer;
use App\Livewire\Customers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',CreateCustomer::class)->name('customer.create');
Route::get('/customers',Customers::class)->name('customers');