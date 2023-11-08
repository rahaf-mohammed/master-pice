<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeCome;


use App\Http\Controllers\AdminCome;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('user.home');
});
Route::get('/index', function () {
    return view('front.index');
});

Route::get('/about', function () {
    return view('front.about');
});

Route::get('/appointment', function () {
    return view('front.appointment');
});

Route::get('/contact', function () {
    return view('front.contact');
});

Route::get('/opening', function () {
    return view('front.opening');
});

Route::get('/price', function () {
    return view('front.price');
});

Route::get('/service', function () {
    return view('front.service');
});

/*Route::get('/sign', function () {
    return view('front.sign');
});*/  

Route::get('/team', function () {
    return view('front.team');
});

Route::get('/testimonial', function () {
    return view('front.testimonial');
});

Route::get('/',[HomeCome::class,'index']);


Route::get('/home',[HomeCome::class,'redirect']);
Route::get('/team',[HomeCome::class,'getTeam'])->name('getTeam');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_team_view',[AdminCome::class,'addview']);

Route::post('/upload_team',[AdminCome::class,'upload']);

Route::post('/appointment',[HomeCome::class,'Aappointment']);
Route::get('/team',[HomeCome::class,'getTeam'])->name('getTeam');

Route::get('/appointment',[HomeCome::class,'getAappointment'])->name('getAappointment');
