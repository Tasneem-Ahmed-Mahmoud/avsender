<?php

use App\Models\Plan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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

   Route::get('/test',function(){
    // $arr= [
        \DB::statement("ALTER TABLE `devices` ADD `hook_url` TEXT NULL AFTER `status`");
   // ];
   });


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('switch-language/{locale}', [App\Http\Controllers\CommonController::class, 'switchLang'])->name('switchLang');

Route::group(['prefix' => 'cron', 'as' => 'cron.'], function (){

    Route::get('/execute-schedule', [App\Http\Controllers\CronController::class, 'ExecuteSchedule']);

    Route::get('/execute-webhook', [App\Http\Controllers\CronController::class, 'ExecuteWebhook']);

    Route::get('/notify-to-user', [App\Http\Controllers\CronController::class, 'notifyToUser']);
    Route::get('/remove-junk-device', [App\Http\Controllers\CronController::class, 'removeJunkDevice']);

});

Route::get('/local/{lang}',function($lang){
     \Session::put('locale', $lang);
     \App::setlocale($lang);
     
     return back();
});

//**======================== Payment Gateway Route Group for merchant ====================**//
Route::group(['middleware' => ['auth', 'web']], function () {
    Route::get('/payment/paypal', '\App\Gateway\Paypal@status');
    Route::post('/stripe/payment', '\App\Gateway\Stripe@status')->name('stripe.payment');
    Route::get('/stripe', '\App\Gateway\Stripe@view')->name('stripe.view');
    Route::get('/payment/mollie', '\App\Gateway\Mollie@status');
    Route::post('/payment/paystack', '\App\Gateway\Paystack@status')->name('paystack.status');
    Route::get('/paystack', '\App\Gateway\Paystack@view')->name('paystack.view');
    Route::get('/payment/mercado', '\App\Gateway\Mercado@status')->name('mercadopago.status');
    Route::get('/razorpay/payment', '\App\Gateway\Razorpay@view')->name('razorpay.view');
    Route::post('/razorpay/status', '\App\Gateway\Razorpay@status');
    Route::get('/payment/flutterwave', '\App\Gateway\Flutterwave@status');
    Route::get('/payment/thawani', '\App\Gateway\Thawani@status');
    Route::get('/payment/instamojo', '\App\Gateway\Instamojo@status');
    Route::get('/payment/toyyibpay', '\App\Gateway\Toyyibpay@status');
    Route::get('/manual/payment', '\App\Gateway\CustomGateway@status');
    Route::get('payu/payment', '\App\Gateway\Payu@view')->name('payu.view');
    Route::post('payu/status', '\App\Gateway\Payu@status')->name('payu.status');
});

// Route::get('duplicate-plan',function(){
//     // Retrieve the original plan
//     $originalPlans = Plan::get();
    
//    foreach($originalPlans as $plan){
//     $newPlan = $plan->replicate(); 
//     $newPlan->days = $plan->days == 30 ? 365 : 30; // Switch days from 30 to 365 or vice versa
//   $newPlan->save();  
//    }
  
    


// });
// Route::view('/test','auth/passwords/reset');


Route::get('/password/link', function () {
    return view('auth.link');
})->name('password.link');
// Route::post('/password/resend', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.resend');


Route::post('/password/email/resend', [ForgotPasswordController::class, 'resendResetLink'])->name('password.email.resend');


Route::get('password/success', function () {
    return view('auth.passwords.success');
})->name('password.success');


Route::get('/password/expired', function () {
    return view('auth.passwords.expired');
})->name('password.expired');


Route::view('/test','frontend.inc.head-1');