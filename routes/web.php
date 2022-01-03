<?php

use App\Http\Controllers\Admin\AdminActivityController;
use App\Http\Controllers\Admin\AdminContactsController;
use App\Http\Controllers\Admin\AdminCourseController;
use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminSliderController;
use App\Http\Controllers\Admin\AdminTeacherController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\EndUserController;
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
});
//enduser routes
Route::get('/',[EndUserController::class,'homeSlider'])->name('home.slider');
Route::group(['as' => 'home.'],function (){
Route::get('/faq',[EndUserController::class,'faq'])->name('faq');
Route::get('/teachers',[EndUserController::class,'teacher'])->name('teacher');
Route::get('/courses',[EndUserController::class,'course'])->name('courses');
});
//auth
Route::group(['prefix'=> 'admin' ,'as' => 'admin.'],function (){
Route::get('/login',[AuthController::class,'loginPage'])->name('loginpage');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/signup',[AuthController::class,'signUpPage'])->name('signuppage');
Route::post('/signup',[AuthController::class,'signUp'])->name('signup');
});
Route::group(['prefix'=> 'admin' ,'as' => 'admin.','middleware'=>'auth'],function (){

Route::get('/',[AdminHomeController::class,'index'])->name('index');


// faq routes
Route::group(['prefix'=>'faq' ,'as'=>'faq.'],function(){
Route::get('/create',[AdminFaqController::class,'create'])->name('create');
Route::post('/store',[AdminFaqController::class,'store'])->name('store');
Route::get('/all',[AdminFaqController::class,'index'])->name('all');
Route::delete('/delete',[AdminFaqController::class,'delete'])->name('delete');
Route::get('/edit/{faqID}',[AdminFaqController::class,'edit'])->name('edit');
Route::put ('/update',[AdminFaqController::class,'update'])->name('update');
});
//slider routes
Route::group(['prefix'=>'slider' ,'as'=>'slider.'],function(){
Route::get('/create',[AdminSliderController::class,'create'])->name('create');
Route::post('/store',[AdminSliderController::class,'store'])->name('store');
Route::get('/all',[AdminSliderController::class,'index'])->name('all');
Route::delete('/delete',[AdminSliderController::class,'delete'])->name('delete');
Route::get('/edit/{sliderID}',[AdminSliderController::class,'edit'])->name('edit');
Route::put('/update',[AdminSliderController::class,'update'])->name('update');
});
// activites routes 
Route::group(['prefix'=>'activity' ,'as'=>'activity.'],function(){
Route::get('/create',[AdminActivityController::class,'create'])->name('create');
Route::post('/store',[AdminActivityController::class,'store'])->name('store');
Route::get('/all',[AdminActivityController::class,'index'])->name('all');
Route::delete('/delete',[AdminActivityController::class,'delete'])->name('delete');
Route::get('/edit/{activityID}',[AdminActivityController::class,'edit'])->name('edit');
Route::put('/update',[AdminActivityController::class,'update'])->name('update');
});

//contacts route
Route::group(['prefix'=>'contacts' ,'as'=>'contacts.'],function(){
    Route::get('/create',[AdminContactsController::class,'create'])->name('create');
    Route::post('/store',[AdminContactsController::class,'store'])->name('store');
    Route::get('/all',[AdminContactsController::class,'index'])->name('all');
    Route::delete('/delete',[AdminContactsController::class,'delete'])->name('delete');
    Route::get('/edit/{contactID}',[AdminContactsController::class,'edit'])->name('edit');
    Route::put('/update',[AdminContactsController::class,'update'])->name('update');
});

// teachersRoutes
Route::group(['prefix'=>'teacher' ,'as'=>'teacher.'],function(){
    Route::get('/all',[AdminTeacherController::class,'index'])->name('all');
    Route::get('/create',[AdminTeacherController::class,'create'])->name('create');
    Route::post('/store',[AdminTeacherController::class,'store'])->name('store');
    Route::delete('/delete',[AdminTeacherController::class,'delete'])->name('delete');
    Route::get('/edit/{teacherID}',[AdminTeacherController::class,'edit'])->name('edit');
    Route::put('/update',[AdminTeacherController::class,'update'])->name('update');
});

//courses routes
Route::group(['prefix'=>'course' ,'as'=>'course.'],function(){
    Route::get('/all',[AdminCourseController::class,'index'])->name('all');
    Route::get('/create',[AdminCourseController::class,'create'])->name('create');
    Route::post('/store',[AdminCourseController::class,'store'])->name('store');
    Route::delete('/delete',[AdminCourseController::class,'delete'])->name('delete');
    Route::get('/edit/{courseID}',[AdminCourseController::class,'edit'])->name('edit');
    Route::put('/update',[AdminCourseController::class,'update'])->name('update');

});
});






// sliderRoutes 
