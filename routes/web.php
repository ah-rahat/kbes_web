<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\IndexController;


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
    return view('welcome');
});

// Frontend Routes
Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('services', [IndexController::class, 'services'])->name('services');
Route::get('female_workers', [IndexController::class, 'female_workers'])->name('female_workers');
Route::get('clients', [IndexController::class, 'clients'])->name('clients');
Route::get('certificates', [IndexController::class, 'certificates'])->name('certificates');
Route::get('gallery', [IndexController::class, 'gallery'])->name('gallery');
Route::get('social_activity', [IndexController::class, 'social_activity'])->name('social_activity');
Route::get('news_blogs', [IndexController::class, 'news_blogs'])->name('news_blogs');
Route::get('circular', [IndexController::class, 'circular'])->name('circular');
Route::get('career', [IndexController::class, 'career'])->name('career');
Route::get('contact', [IndexController::class, 'contact'])->name('contact');
/*representative japan Routes*/
Route::get('rep_japan', [IndexController::class, 'rep_japan'])->name('rep_japan');
/*about Routes*/
Route::get('about', [IndexController::class, 'about'])->name('about');
// single_clients Route
Route::get('single_clients', [IndexController::class, 'single_clients'])->name('single_clients');// services Route
Route::get('single_service/{ser_id}', [IndexController::class, 'single_service'])->name('single_services'); 
//single_country Route
Route::get('single_country/{country_id}', [IndexController::class, 'single_country'])->name('single_country');
//Projects Route
Route::get('single_projects/{project_id}', [IndexController::class, 'single_project'])->name('single_projects');
//passport tracker
Route::get('passport_tracker', [IndexController::class, 'passport_tracker'])->name('passport_tracker');
Route::post('passport_tracker_form', [IndexController::class, 'passport_tracker_form'])->name('passport_tracker_form');
//Download about as pdf file
Route::get('download/pdf', [IndexController::class, 'download_about_pdf'])->name('download_about');//Contact registraion form route
Route::post('/contact/registraion', [IndexController::class, 'registration'])->name('contact.registration');
//download Sample Docs route
Route::get('/single_country/docs/{doc_id}', [IndexController::class, 'download_sample_docs'])->name('download.sample_docs');
//passport Complain Route
Route::get('/passport_complain', [IndexController::class, 'passport_complain'])->name('passport_complain');
Route::post('/passport_complain/store', [IndexController::class, 'passport_complain_store'])->name('complain');
//Passport Verification
Route::post('/passport_verification', [IndexController::class, 'passport_verification'])->name('passport_verification');
//massage from Management Route
Route::get('management/massage/{m_id}', [IndexController::class, 'management_massage'])->name('management.massage');
//kb consultancy
Route::get('kbc', [IndexController::class, 'kbc'])->name('kbc');





