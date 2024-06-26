<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;



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


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //college
    
   
    Route::get('/college',[CollegeController::class,'createPage'])->name('college');
    Route::post('/college',[CollegeController::class,'store'])->name('college.store');
    Route::patch('/college',[CollegeController::class,'edit'])->name('college.update');
    Route::patch('/updateColleges/{id}',[CollegeController::class,'update_popular']);
    
    Route::get('/college/{id}',[CollegeController::class,'destroy'])->name('college.delete');
    Route::get('/exceldata',[CollegeController::class,'exceldata'])->name('export.excel');
   
    //courses
    Route::get('/course',[CourseController::class,'createPage'])->name('course');
    Route::post('/course',[CourseController::class,'store'])->name('course.store');
    Route::patch('/course',[CourseController::class,'edit'])->name('course.update');
    Route::get('/course/{id}',[CourseController::class,'destroy'])->name('course.destroy');
    Route::get('/course-overview',[CourseController::class,'course_OverView']);
    Route::post('/course-overview',[CourseController::class,'course_OverView_store'])->name('course_OverView.store');
  


});
//user area
Route::get('/college_detail/{id}',[CollegeController::class,'colleges'])->name('colleges');
Route::get('/', function () {
    return view('pages.home');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/colleges', function () {
    return view('pages.colleges');
});
Route::get('/', function () {
    return view('pages.home');
});
Route::get('/apply-frenchaichies',[HomeController::class,'frenchaichies_index']);
//course Detail
Route::get('/course_detail/{id}',[CourseController::class,'course_Detail']);



require __DIR__.'/auth.php';
