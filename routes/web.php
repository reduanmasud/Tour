<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteSettingsController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\UserAuth;
use App\Models\Payment;
use App\Models\SiteSetting;
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
    return view('index');
})->name('home');


Route::post('/site_settings/image', [SiteSettingsController::class, 'update_image'])->name('update.image');
Route::post('/site_settings/title', [SiteSettingsController::class, 'update_title'])->name('update.title');
Route::post('/site_settings/bkahs', [SiteSettingsController::class, 'update_bkash'])->name('update.bkash');

Route::get('/user/login', [UserAuth::class, 'login_page'])->name('user.login');
Route::post('/user/login', [UserAuth::class, 'login']);

Route::get('/user/signup', [UserAuth::class, 'signup_page'])->name('user.signup');
Route::post('/user/signup', [UserAuth::class, 'signup']);


Route::get('/browse/all', [TourController::class, 'browse_all'])->name('browse.all');
Route::get('/tour/{id}', [TourController::class, 'show'])->name('tour.single');
Route::get('/booking', fn() => view('booking'))->name('tour.booking');
Route::post('/booking', [TourController::class, 'booking']);
Route::post('/payment', [TourController::class, 'payment'])->name('tour.payment');

Route::get('/dashboard', function () {
    return view('profile');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function(){
    Route::post('tour/add', [TourController::class, 'store'])->name('tour.add');
    Route::get('/tour/check/{id}', [TourController::class, 'tour_check'])->name('tour.view');

});



Route::middleware(['auth'])->prefix('account')->as('account.')->group(function(){
    Route::get('/tour-add',[TourController::class, 'create'])->name('tour.add');
    Route::post('/tour-add', [TourController::class, 'store']);

    Route::get('/active-tour',[TourController::class, 'active_tour'])->name('tour.active');
    Route::get('/closed-tour',[TourController::class, 'closed_tour'])->name('tour.closed');


    Route::get('/tour/{id}', [TourController::class, 'single_view'])->name('tour.view');
    Route::middleware([])->group(function() {
        Route::get('/site-settings',[SiteSettingsController::class, 'index'])->name('site.settings');
        Route::get('/payment-confirm', [PaymentController::class, 'index'])->name('site.confirm.pay');
        Route::post('/tour/payment/confirm', [PaymentController::class, 'confirm'])->name('payment.confirm');
    });

});
require __DIR__.'/auth.php';
