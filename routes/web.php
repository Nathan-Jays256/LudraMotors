<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

/////////////////////////CLIENT-SIDE ///////////
Route::get('/', [HomeController::class, 'gethome'])->middleware('auth');
Route::get('/about', [HomeController::class, 'getabout']);
Route::get('/contact', [HomeController::class, 'getContact']);
Route::get('/car-listing', [HomeController::class, 'getCarListings']);
Route::get('/cardetails/{id}', [HomeController::class, 'getCarDetails']);
Route::get('/change-password', [HomeController::class, 'getChangePassword']);
Route::get('/leave-testimonial', [HomeController::class, 'getleavetestmonial']);
Route::get('/my-bookings', [HomeController::class, 'getMyBookings']);
Route::get('/my-testimonials', [HomeController::class, 'getMyTestimonials']);
Route::get('/myprofile', [HomeController::class, 'getProfile']);
Route::get('/payments', [HomeController::class, 'getPayments']);
Route::get('/remove-booking/{id}', [HomeController::class, 'getCancelBooking']);
Auth::routes();
Route::get('/search', [HomeController::class, 'postSearch']);

/////////////////////////POST CLIENT-SIDE ////////////////
Route::post('/myprofile', [HomeController::class, 'postProfile']);
Route::post('/leave-testimonial', [HomeController::class, 'postleavetestmonial']);
Route::post('/contact', [HomeController::class, 'postContactForm']);
Route::post('/subscribe', [HomeController::class, 'postSubscribers']);
Route::post('/cardetails/{id}', [HomeController::class, 'postBookCar']);
Route::post('/finish-payments', [HomeController::class, 'postPayments']);
Route::post('/', [HomeController::class, 'postPayments']);








/////////////////////////ADMIN CLIENT-SIDE ////////////////
Route::get('admin-dashboard', [AdminController::class, 'getDashboard']);
Route::get('/create-brand', [AdminController::class, 'getcreateBrand']);
Route::get('/manage-brand', [AdminController::class, 'getmanageBrand']);
Route::get('/remove-car/{id}', [AdminController::class, 'getDeleteCar']);
Route::get('/delete-brand/{id}', [AdminController::class, 'getDeleteBrand']);
Route::get('/create-a-car', [AdminController::class, 'getcreateCar']);
Route::get('/manage-cars', [AdminController::class, 'getmanagecars']);
Route::get('/manage-bookings', [AdminController::class, 'getManageBookings']);
Route::get('/delete-booking/{id}', [AdminController::class, 'getDeleteBookings']);
Route::get('/manage-payments', [AdminController::class, 'getManagePayments']);
Route::get('/reg-users', [AdminController::class, 'getRegUsers']);
Route::get('/clients-feedbacks', [AdminController::class, 'getClientFeedbacks']);
Route::get('/clients-feedbacks/{id}', [AdminController::class, 'getFeedbacksDetails']);
Route::get('/manage-testimonials', [AdminController::class, 'getManageTestimonials']);
Route::get('/manage-testimonials/{id}', [AdminController::class, 'getTestimonialDetails']);
Route::get('/delete-testimony/{id}', [AdminController::class, 'getDeleteTestimony']);
Route::get('/manage-subscribers', [AdminController::class, 'getManageSubscribers']);
Route::get('/approve-booking/{id}', [AdminController::class, 'postApproveBooking']);
Route::get('/disapprove-booking/{id}', [AdminController::class, 'postDispproveBooking']);
Route::get('/confirm-payment/{id}', [AdminController::class, 'postConfirmPayment']);
Route::get('/delete-payment/{id}', [AdminController::class, 'getDeletePayment']);
Route::get('/admin', [AdminController::class, 'getAdminLogin']);
Route::get('/change-password', [AdminController::class, 'getChangePassword']);

    /////////////////////////POST ADMIN CLIENT-SIDE ////////////////

Route::post('/create-brand', [AdminController::class, 'postcreateBrand']);
Route::post('/create-a-car', [AdminController::class, 'postcreateCar']);
Route::post('/admin', [AdminController::class, 'postAdminLogin']);
Route::get('/admin/logout', [AdminController::class, 'AdminLogout']);
Route::post('/change-password', [AdminController::class, 'postChangePassword']);




