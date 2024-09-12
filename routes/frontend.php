<?php

use App\Http\Controllers\Frontend as FRONTEND;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [FRONTEND\Home\HomeController::class, 'index']);
Route::get('/about', [FRONTEND\Home\HomeController::class, 'about']);
Route::get('/blogs', [FRONTEND\Blog\BlogController::class, 'index'])->name('frontend.blogs.index');
Route::get('/blog/{blog}', [FRONTEND\Blog\BlogController::class, 'show'])->name('frontend.blogs.show');
Route::get('/category/{slug}/{id}', [FRONTEND\BlogController::class, 'category']);
Route::get('/tag/{slug}/{id}', [FRONTEND\BlogController::class, 'tag']);
Route::get('/team', [FRONTEND\Home\HomeController::class, 'team']);
Route::get('/how-its-work', [FRONTEND\Home\HomeController::class, 'work']);
Route::get('/faq', [FRONTEND\Home\HomeController::class, 'faq']);
Route::get('/pricing', [FRONTEND\PricingController::class, 'index'])->name('pricing');
Route::get('/register/{id}', [FRONTEND\PricingController::class, 'register'])->middleware('guest')->name('register-form');
Route::post('/register-plan/{id}', [FRONTEND\PricingController::class, 'registerPlan'])->middleware('guest');
Route::get('/contact', [FRONTEND\ContactController::class, 'index']);
Route::post('/send-mail', [FRONTEND\ContactController::class, 'sendMail'])->name('send.mail');
Route::get('/features', [FRONTEND\Feature\FeatureController::class, 'index'])->name('frontend.feature.index');
Route::get('/feature/{feature}', [FRONTEND\Feature\FeatureController::class, 'show'])->name('frontend.feature.show');
Route::get('/page/{slug}', [FRONTEND\Home\HomeController::class, 'page']);

Route::resource('install', App\Http\Controllers\Installer\InstallerController::class);
Route::post('install/verify', [App\Http\Controllers\Installer\InstallerController::class, 'verify'])->name('install.verify');
Route::post('install/migrate', [App\Http\Controllers\Installer\InstallerController::class, 'migrate'])->name('install.migrate');


Route::get('/choose-plan/{plan}', [FRONTEND\PricingController::class, 'choosePlan'])->name('choose.plan');
Route::get('/choose-payment-method/{plan}', [FRONTEND\PricingController::class, 'choosePaymentMethod'])->name('choose.payment.method');
Route::post('/proceed-payment', [FRONTEND\PricingController::class, 'proceedPayment'])->name('proceed-payment');