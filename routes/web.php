<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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
    return view('home');
});

Route::get('/certificate/result/{id}',[AdminController::class,'download_qrcode_pdf'])->name('download_qrcode_pdf');

Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
        Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
        Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
        Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');

        // My Kode
        Route::get('addshablon',[AdminController::class,'addshablon'])->name('admin.addshablon');
        Route::post('addshablon_form',[AdminController::class,'addshablon_form'])->name('admin.addshablon_form');

        Route::get('allshablon',[AdminController::class,'allshablon'])->name('admin.allshablon');
        Route::get('download_pdf/{id}',[AdminController::class,'download_pdf'])->name('admin.download_pdf');
        Route::get('print_pdf/{id}',[AdminController::class,'print_pdf'])->name('admin.print_pdf');
        // Edit 
        Route::get('edit_pdf/{id}',[AdminController::class,'edit_pdf'])->name('admin.edit_pdf');
        Route::get('newedit_pdf/{id}',[AdminController::class,'newedit_pdf'])->name('admin.newedit_pdf');
        
        Route::put('edit_form/{id}',[AdminController::class,'edit_form'])->name('admin.edit_form');
        Route::post('newedit_form',[AdminController::class,'newedit_form'])->name('admin.newedit_form');
        // Delete
        Route::get('delete_pdf/{id}',[AdminController::class,'delete_pdf'])->name('admin.delete_pdf');



        Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');
        Route::post('change-profile-picture',[AdminController::class,'updatePicture'])->name('adminPictureUpdate');
        Route::post('change-password',[AdminController::class,'changePassword'])->name('adminChangePassword');

});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    Route::get('settings',[UserController::class,'settings'])->name('user.settings');

});
