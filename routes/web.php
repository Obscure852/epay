<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

/*Route::get('/', function () {
    //return view('welcome');
    return view("login");
});*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/sign', [HomeController::class, 'signup']);
Route::get('pages.home', [HomeController::class, 'home']);
Route::get('pages.customers', [HomeController::class, 'customers']);
Route::get('pages.add_new_customer', [HomeController::class, 'addNew']);
Route::get('pages.items', [HomeController::class, 'items']);
Route::get('pages.add_new_item', [HomeController::class, 'add_new_item']);

#Estimates
Route::get('pages.estimates', [HomeController::class, 'estimates']);
Route::get('pages.add_new_estimate', [HomeController::class, 'add_new_estimate']);
Route::get('pages.estimates_list_view', [HomeController::class, 'estimates_list_view']);

#Invoices
Route::get('pages.invoices', [HomeController::class, 'invoices']);
Route::get('pages.add_new_invoice', [HomeController::class, 'add_new_invoice']);
Route::get('pages.invoices_list_view', [HomeController::class, 'invoices_list_view']);

#Sales Receipts
Route::get('pages.salesreceipts', [HomeController::class, 'salesreceipts']);
Route::get('pages.add_new_salesreceipt', [HomeController::class, 'add_new_salesreceipt']);
Route::get('pages.salesreceipts_list_view', [HomeController::class, 'salesreceipts_list_view']);

#Reports
Route::get('pages.reports', [HomeController::class, 'reports']);
Route::get('pages.salesbycustomer_report', [HomeController::class, 'salesbycustomer_report']);
