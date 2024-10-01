<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use phpseclib3\File\ASN1\Maps\Certificate;

//User
Route::get('/', [HomeController::class, 'index'])->name('index');
// Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/course/{id}', [HomeController::class, 'showCourse'])->name('home.showCourse');
Route::get('/course/{course_id}/certificate/{certificate_id}', [HomeController::class, 'showUploadForm'])->name('home.showUploadForm');
Route::post('/course/{certificate_id}/upload', [HomeController::class, 'uploadCertificate'])->name('home.uploadCertificate');
Route::get('/my-certificates', [HomeController::class, 'myCertificates'])->name('home.myCertificates');


//User Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'postLogin']);
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'postRegister']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//SSO Google
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');

//Admin
// Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::get('/loginadmin', [AdminController::class, 'loginadmin'])->name('loginadmin');
Route::post('/loginadmin', [AdminController::class, 'postLoginAdmin']);


Route::middleware(['auth', CheckAdmin::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin.dashboard');

    //User Admin
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');

    //Category
    Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::post('/admin/category', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::delete('/admin/category/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');

    //Certificate
    Route::get('/admin/certificates', [CertificateController::class, 'index'])->name('admin.certificate.index');
    Route::post('/admin/certificates/{courseId}', [CertificateController::class, 'store'])->name('admin.certificates.store');
    Route::get('/admin/certificates/course/{courseId}', [CertificateController::class, 'showCourseCertificates'])->name('admin.course.certificates.show');
});


if(App::environment('production')){
    URL::forceScheme('https');
}