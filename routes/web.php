<?php

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

// Route::get('/', function () {
//     return view('inventory.welcome');
// });

Route::get('{school}', 'InventoryController@welcome');
Route::get('{school}/inventory/create', 'InventoryController@create');
Route::get('{school}/inventory/sale', 'InventoryController@sale');
Route::get('{school}/inventory/stock', 'InventoryController@stock');
Route::get('{school}/inventory/reports', 'InventoryController@reports');
Route::get('{school}/inventory/categories', 'InventoryController@categoryIndex');
Route::post('inventory/category/create', 'InventoryController@categoryCreate');
Route::post('inventory/item/create', 'InventoryController@itemCreate');
Route::post('inventory/invoice/store', 'InventoryController@invoiceStore');
Route::get('{school}/inventory/reports/index', 'InventoryController@reportsIndex');
Route::get('{school}/inventory/reports/daily', 'InventoryController@reportDaily');
Route::get('{school}/inventory/reports/stock', 'InventoryController@stockReport');
Route::get('{school}/inventory/reports/invoice', 'InventoryController@invoiceReport');
Route::post('inventory/report/daily/fetch', 'InventoryController@fetchDailyReport');
Route::post('inventory/report/invoice/fetch', 'InventoryController@fetchInvoiceReport');

Route::post('class/{classroom}/members/move', 'ClassroomController@getMembers');
