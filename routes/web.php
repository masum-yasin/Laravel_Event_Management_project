<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\VenueController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\frontend\DetailsController;
use App\Http\Controllers\frontend\FrontendHomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//  Frontend Routes start
Route::get('/', function () {
    return view('/frontend.home');
})->name('home');

Route::get('/frontend/contact', function () {
    return view('frontend.contact');
})->name('contact.us');
Route::get('/frontend/about', function () {
    return view('/frontend.about');
})->name('about.us');
Route::get('/frontend/productlist', function () {
    return view('frontend.productlist');
})->name('productlist');
Route::get('/frontend/productdetail', function () {
    return view('frontend.productdetail');
})->name('productdetail');
Route::get('/frontend/allpost', function () {
    return view('frontend.allpost');
})->name('allpost');
Route::get('/frontend/singlepost', function(){
 return view('frontend.singlepost');
})->name('singlepost');
Route::get('/frontend/eventschedule', function(){
    return view('frontend.eventschedule');
   })->name('eventschedule');
   Route::get('/frontend/eventdetail',function(){
    return view('frontend.eventdetail');
   })->name('eventdetail');
//frontend Routes Ending//
//pass data frontend from backend//
Route::get('/', [FrontendHomeController::class,'index']);
Route::get('/event/details/{id}',[DetailsController::class,'index']);



Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
     
});



// search route//
Route::get('findvenu',[VenueController::class,'Search']);

require __DIR__.'/auth.php';
// Multiple auth by brazze

Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashboard'); 
});
Route::middleware(['auth','role:editor'])->group(function()
{
    Route::get('editor/dashboard',[EditorController::class,'EditorDashboard'])->name('editor.dashboard');
});
Route::middleware(['auth','role:user'])->group(function(){
    Route::get('user/dashboard',[UserController::class,'UserDashboard'])->name('user.dashboard');
});





