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

Auth::routes();

Route::get('/','HomeController@index')->name('home');
Route::get('/cart','CartCheckoutController@index')->name('cart');
Route::get('/checkout','CartCheckoutController@checkout')->name('checkout');
Route::get('/product','HomeProductController@index')->name('allproduct');
Route::get('/payment','PaymentController@index')->name('payment');
Route::get('/product/collection/namakoleksi','HomeProductController@collection')->name('collection');
Route::get('/product/namaproduct','HomeProductController@show')->name('show');


Route::group(['prefix' => 'admin'], function () {

    Route::get('/dashboard', 'DashboardController@index')->name('home');

    //produk
    Route::get('/product', 'ProductController@index')->name('listProduct');
    Route::get('/product/manage', 'ProductController@create')->name('product');
    Route::get('/product/namaproduct', 'ProductController@show')->name('product');
    Route::get('/product/stock', 'ProductController@stock')->name('product');
    Route::get('/product/category', 'CategoryController@index')->name('listKategori');
    Route::post('/product/category/tambah', 'CategoryController@tambah')->name('tambahKategori');
    Route::get('/product/category/manage', 'CategoryController@create')->name('product');
    Route::get('/product/catalog', 'CatalogController@index')->name('product');
    Route::get('/product/catalog/manage', 'CatalogController@create')->name('product');
    Route::get('/product/catalog/show', 'CatalogController@show')->name('product');
    Route::get('/product/import', 'ProductController@import')->name('product');

    Route::post('/product/tambahBarang','ProductController@tambahBarang')->name('admin.product.tambahBarang');

    //order
    Route::get('/order','OrderController@index')->name('order');
    Route::get('/order/draft','OrderController@draft')->name('order');
    Route::get('/order/manage','OrderController@create')->name('order');
    Route::get('/order/return','OrderController@return')->name('order');
    Route::get('/order/show/namaorder','OrderController@show')->name('order');
    Route::get('/order/checkout/abandoned','OrderController@abandoned')->name('order');
    Route::get('/order/checkout/abandoned/setting','OrderController@setting')->name('order');

    //invoice
    Route::get('/print/invoice','InvoiceController@printInvoice');
    Route::get('/print/packingSlip','InvoiceController@packingSlip');
    Route::get('/print/thermalInvoice','InvoiceController@thermalInvoice');

    //discount
    Route::get('/discount','DiscountController@index')->name('discount');
    Route::get('/discount/manage','DiscountController@create')->name('discount');
    Route::get('/discount/report','DiscountController@report')->name('discount');

    //customer 
    Route::get('/customer','CustomerController@index')->name('customer');
    Route::get('/customer/manage','CustomerController@create')->name('customer');
    Route::get('/customer/profile','CustomerController@show')->name('customer');
    Route::get('/customer/segment','SegmentController@index')->name('customer');
    Route::get('/customer/segment/manage','SegmentController@create')->name('customer');
    Route::get('/customer/segment/namasegment','SegmentController@show')->name('customer');
    Route::get('/customer/reseller','ResellerController@index')->name('customer');
    Route::get('/customer/reseller/manage','ResellerController@create')->name('customer');
    Route::get('/customer/reseller/namareseller','ResellerController@show')->name('customer');

    //marketing
    Route::get('/email/newsletter','MarketingController@newsletter')->name('marketing');
    Route::get('/email/newsletter/manage','MarketingController@manageNews')->name('marketing');
    Route::get('/message','MarketingController@message')->name('marketing');
    Route::get('/message/manage','MarketingController@messageManage')->name('marketing');

    //report
    Route::get('/report','ReportController@index')->name('report');
    Route::get('/report/pageview','ReportController@pageview')->name('report');
    Route::get('/report/formdata','ReportController@formData')->name('report');
    Route::get('/report/formdata/manage','ReportController@formDataManage')->name('report');
    Route::get('/report/history/stock','ReportController@stock')->name('report');
    Route::get('/report/history/email','ReportController@email')->name('report');
    Route::get('/report/staff','ReportController@staff')->name('report');

    //setting
    Route::get('/setting','SettingController@index')->name('setting');
    Route::get('/setting/domain','SettingController@domain')->name('setting');
    Route::get('/setting/domain/manage','SettingController@addDomain')->name('setting');
    Route::get('/setting/payment','SettingController@payment')->name('setting');
    Route::get('/setting/payment/manage','SettingController@addPayment')->name('setting');
    Route::get('/setting/shipping','SettingController@shipping')->name('setting');
    Route::get('/setting/shipping/manage','SettingController@addShipping')->name('setting');
    Route::get('/setting/billing','SettingController@billing')->name('setting');
    Route::get('/setting/billing/manage','SettingController@addBilling')->name('setting');
    Route::get('/setting/staff','SettingController@staff')->name('setting');
    Route::get('/setting/blocklist','SettingController@blocklist')->name('setting');
    Route::get('/setting/blocklist/manage','SettingController@addBlocklist')->name('setting');
    Route::get('/setting/integration','SettingController@integration')->name('setting');
    Route::get('/setting/security','SettingController@security')->name('setting');
});
