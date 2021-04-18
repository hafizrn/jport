<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/job/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('job.show');
Route::get('/job', [App\Http\Controllers\HomeController::class, 'jobsAll'] );
Route::get('/job/category/{id}', [App\Http\Controllers\HomeController::class, 'categorySearch'] )->name('category.jobs');
Route::get('/job/location/{name}', [App\Http\Controllers\HomeController::class, 'locationSearch'] )->name('location.jobs');
//Route::resource('/bookmark', App\Http\Controllers\BookmarkController::class );
Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'] )->name('search');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'] )->name('contact');


Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'App\Http\Controllers\Admin','middleware'=>['auth','admin']], function (){
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'] )->name('dashboard');
    Route::resource('division', DivisionController::class );
    Route::resource('district', DistrictController::class );
    Route::resource('upazila', UpazilaController::class );
    Route::resource('category', CategoryController::class );
    Route::resource('level', LevelController::class );
    Route::resource('type', TypeController::class );
    Route::resource('job', JobController::class );
});
Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'App\Http\Controllers\Author','middleware'=>['auth','author']], function (){
    Route::get('dashboard', [App\Http\Controllers\Author\DashboardController::class, 'index'] )->name('dashboard');
});
Route::group(['as'=>'employer.','prefix'=>'employer','namespace'=>'App\Http\Controllers\Employer','middleware'=>['auth','employer']], function (){
    Route::get('dashboard', [App\Http\Controllers\Employer\DashboardController::class, 'index'] )->name('dashboard');
    Route::resource('job', JobController::class );
    Route::resource('profile', EmployerprofileController::class );
    Route::resource('jobcandidate', JobcandidateController::class );
    Route::get('jobseeker/resume/{id}', [JobController::class, 'resume_show'] )->name('resume.show');
});
Route::group(['as'=>'user.','prefix'=>'user','namespace'=>'App\Http\Controllers\User','middleware'=>['auth','user']], function (){
    Route::get('dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'] )->name('dashboard');
    Route::resource('resume', UserresumeController::class );
    Route::resource('education', UsereducationController::class );
    Route::resource('experience', UserexperienceController::class );
    Route::resource('bookmark',BookmarksController::class);
    Route::resource('jobapply', JobapplyController::class );


});

Route::get('/clear', function() {
    Artisan::call('optimize:clear');
    echo Artisan::output();
});
