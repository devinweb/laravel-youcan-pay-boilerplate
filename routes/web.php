<?php

use App\Models\User;
use Devinweb\LaravelYouCanPay\Facades\LaravelYouCanPay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

Route::get('/', function (Request $request) {
    $original_price = rand(10, 50);
    
    $data= [
        'order_id' => Str::uuid()->toString(),
        'amount' => $original_price * 100
    ];

    $user = User::first();

    $customer_data = $user->getCustomerInfo();
    $metadata= [
        'key' => 'value'
    ];

    $payment_url= LaravelYouCanPay::setCustomerInfo($customer_data)->setMetadata($metadata)->createTokenization($data, $request)->getPaymentURL();
    
    // $public_key = config('youcanpay.public_key');
    // $isSandbox = config('youcanpay.sandboxMode');
    // $language = config('app.locale');

    // return redirect()->away($payment_url);


    return view('welcome', [
        'payment_url' => $payment_url,
        'original_price' => $original_price
    ]);
});
Route::get('/error', function () {
    return view('error');
});
Route::get('/success', function () {
    return view('success');
});
