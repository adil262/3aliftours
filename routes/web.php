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
//Login
Route::get('/', 'AuthController@login');
Route::get('/dashboard', 'AuthController@postlogin');
//Dashboard
Route::get('/dashboard','DashboardController@index');
//Account
Route::get('/account', 'AccountController@index');
//Schedule
Route::get('/schedule', 'ScheduleController@index');
Route::get('/schedule/create', 'ScheduleController@create');
Route::post('/schedule', 'ScheduleController@store');
Route::get('/schedule/{schedule}/edit','ScheduleController@edit');
Route::patch('/schedule/{schedule}','ScheduleController@update');
Route::get('/schedule/{id}/delete','ScheduleController@destroy');
//TICKET
Route::get('/ticket', 'TicketController@index');
Route::get('/ticket/create', 'TicketController@create');
Route::post('/ticket', 'TicketController@store');
Route::get('/ticket/{ticket}/edit','TicketController@edit');
Route::patch('/ticket/{ticket}','TicketController@update');
Route::get('/ticket/{id}/delete','TicketController@destroy');
//COSTUMER
Route::get('/costumer', 'CostumerController@index');
Route::get('/costumer/create', 'CostumerController@create');
Route::post('/costumer', 'CostumerController@store');
Route::get('/costumer/{costumer}/edit','CostumerController@edit');
Route::patch('/costumer/{costumer}','CostumerController@update');
Route::get('/costumer/{id}/delete','CostumerController@destroy');
//SUPPLIER
Route::get('/supplier', 'SupplierController@index');
Route::get('/supplier/create', 'SupplierController@create');
Route::post('/supplier', 'SupplierController@store');
Route::get('/supplier/{supplier}/edit','SupplierController@edit');
Route::patch('/supplier/{supplier}','SupplierController@update');
Route::get('/supplier/{id}/delete','SupplierController@destroy');
//CAPITAL
Route::get('/capital', 'TransactionController@index2');
Route::get('/capital/create', 'TransactionController@create2');
Route::post('/capital', 'TransactionController@store2');
Route::get('/capital/{capital}/edit','TransactionController@edit');
Route::patch('/capital/{capital}','TransactionController@update');
//PURCHASE
Route::get('/purchase', 'PurchaseController@index4');
Route::get('/purchase/create', 'PurchaseController@create4');
Route::post('/purchase', 'PurchaseController@store4');
Route::get('/purchase/{purchase}/edit','PurchaseController@edit4');
Route::patch('/purchase/{purchase}','PurchaseController@update4');
//CASH
Route::get('/cash', 'TransactionController@index');
//SALES
Route::get('/sales', 'TransactionController@index3');
Route::get('/sales/create', 'TransactionController@create3');
Route::post('/sales', 'TransactionController@store3');
Route::get('/sales/{sales}/edit','TransactionController@edit3');
Route::patch('/sales/{sales}','TransactionController@update3');
//Report
Route::get('/generalledger','ReportController@generalledger');
Route::get('/search','ReportController@search');