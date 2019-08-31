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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/member_registration', 'Membercontoller@store');

/*Route::get('/paypal/{order?}','PayPalController@form')->name('order.paypal');
Route::post('/checkout/payment/{order}/paypal','PayPalController@checkout')->name('checkout.payment.paypal');
Route::get('/paypal/checkout/{order}/completed','PayPalController@completed')->name('paypal.checkout.completed');
Route::get('/paypal/checkout/{order}/cancelled','PayPalController@cancelled')->name('paypal.checkout.cancelled');
Route::post('/webhook/paypal/{order?}/{env?}','PayPalController@webhook')->name('webhook.paypal.ipn');
Route::get('payment-completed/{order}','PayPalController@paymentCompleted')->name('paymentCompleted');*/


//PAYPAL ROUTES
//payment form
//Route::get('/', 'PaymentController@index');

// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');

// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');