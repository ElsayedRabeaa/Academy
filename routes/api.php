<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\{AdminController,StudentController,TeacherController };

use App\Http\Controllers\Student\{CourseController,MessageController,ProfileController,ReviewController};
use App\Http\Controllers\Teacher\{CourseTeacherController,VidoeTeacherController,ProfileTeacherController};

use App\Http\Controllers\Admin\{CourseAdminController,StudentAdminController,VidoeAdminController,TeacherAdminController,ReviewAdminController,ProfileAdminController,MessageAdminController};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('auth')->group(function () {

    Route::controller(AdminController::class)->prefix('admin')->group(function () {
        Route::post('/login', 'login');
        Route::post('/logout', 'logout');
        Route::get('/profile', 'profile');
        
    });


    Route::controller(StudentController::class)->prefix('student')->group(function () {
        Route::post('/login', 'login');
        Route::post('/logout', 'logout');
        Route::get('/profile', 'profile');

    });


    Route::controller(TeacherController::class)->prefix('teacher')->group(function () {
        Route::post('/login', 'login');
        Route::post('/logout', 'logout');
        Route::get('/profile', 'profile');

    });

});
////////////////////////////////// Start admin Apis //////////////////////////////////////////////////



Route::controller(CourseAdminController::class)->prefix('admin')->group(function (){
    Route::get('/viewCourses', 'index')->middleware('auth:admin');
   
});

Route::controller(CourseAdminController::class)->prefix('admin')->group(function () {
    Route::post('/updateCourse/{id}', 'update')->middleware('auth:admin');
       
});
Route::controller(CourseAdminController::class)->prefix('admin')->group(function () {
    Route::post('/deleteCourse/{id}', 'destroy')->middleware('auth:admin');
       
});
//////////////////////////////////////////
Route::controller(MessageAdminController::class)->prefix('admin')->group(function (){
    Route::get('/viewMessages', 'index')->middleware('auth:admin');
   
});

Route::controller(MessageAdminController::class)->prefix('admin')->group(function () {
    Route::post('/deleteMessage/{id}', 'destroy')->middleware('auth:admin');
       
});

//////////////////////////////////////////

Route::controller(ReviewAdminController::class)->prefix('admin')->group(function (){
    Route::get('/viewReviews', 'index')->middleware('auth:admin');
   
});
///////////////////////////////////////////


Route::controller(ProfileAdminController::class)->prefix('admin')->group(function () {
    Route::post('/updateProfile', 'updateProfile')->middleware('auth:admin');
   
});

///////////////////////////////////////////
Route::controller(StudentAdminController::class)->prefix('admin')->group(function () {
    Route::get('/createStudent', 'create')->middleware('auth:admin');
       
});
Route::controller(StudentAdminController::class)->prefix('admin')->group(function () {
    Route::post('/addStudent', 'store')->middleware('auth:admin');
       
});
///////////////////////////////////////////
Route::controller(TeacherAdminController::class)->prefix('admin')->group(function () {
    Route::get('/viewTeachers', 'index')->middleware('auth:admin');
       
});
///////////////////////////////////////////
Route::controller(VidoeAdminController::class)->prefix('admin')->group(function () {
    Route::get('/viewVidoes', 'index')->middleware('auth:admin');
       
});


////////////////////////////////// end admin Apis //////////////////////////////////////////////////

////////////////////////////////// Start Student Apis //////////////////////////////////////////////////

    Route::controller(CourseController::class)->prefix('student')->group(function () {
        Route::get('/viewMycourses', 'getCourses');
       
    });


    Route::controller(ProfileController::class)->prefix('student')->group(function () {
    Route::post('/updateProfile', 'updateProfile')->middleware('auth:student');
       
    });

    Route::controller(MessageController::class)->prefix('student')->group(function () {
        Route::post('/postMessage', 'postMessage')->middleware('auth:student');
           
    });


    Route::controller(ReviewController::class)->prefix('student')->group(function () {
        Route::post('/postReview', 'postReview')->middleware('auth:student');
           
    });
////////////////////////////////// end Student Apis //////////////////////////////////////////////////
     
////////////////////////////////// Start Teacher Apis //////////////////////////////////////////////////

Route::controller(CourseTeacherController::class)->prefix('teacher')->group(function (){
    Route::get('/viewMycourses', 'getCourses')->middleware('auth:teacher');
   
});


Route::controller(ProfileTeacherController::class)->prefix('teacher')->group(function () {
Route::post('/updateProfile', 'updateProfile')->middleware('auth:teacher');
   
});

Route::controller(VidoeTeacherController::class)->prefix('teacher')->group(function () {
    Route::post('/addVidoe', 'addVidoe')->middleware('auth:teacher');
       
    });

    Route::controller(VidoeTeacherController::class)->prefix('teacher')->group(function () {
    Route::post('/deleteVidoe/{id}', 'destroy')->middleware('auth:teacher');
       
});
////////////////////////////////// end teacher Apis //////////////////////////////////////////////////

