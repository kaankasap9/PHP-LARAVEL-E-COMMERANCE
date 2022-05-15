<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Models\admin;
use App\Models\user2;
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

Route::get('/index', function () {
    return view('index');
});
Route::get('/product_summary.blade.php', function () {
    return view('/product_summary');
});
Route::get('/normal.blade.php', function () {
    return view('/normal');
});

Route::get('/compair.blade.php', function () {
    return view('/compair');
});

Route::get('/components.blade.php', function () {
    return view('/components');
});

Route::get('/contact.blade.php', function () {
    return view('/contact');
});

Route::get('/faq.blade.php', function () {
    return view('/faq');
});

Route::get('/forgetpass.blade.php', function () {
    return view('/forgetpass');
});

Route::get('/legal_notice.blade.php', function () {
    return view('/legal_notice');
});

Route::get('/login.blade.php', function () {
    return view('/login');
});

Route::get('/product_details.blade.php', function () {
    return view('/product_details');
});

Route::get('/products.blade.php', function () {
    return view('/products');
});

Route::get('/register.blade.php', function () {
    return view('/register');
});

Route::get('/special_offer.blade.php', function () {
    return view('/special_offer');
});

Route::get('/tac.blade.php', function () {
    return view('/tac');
});

Route::get('/index.blade.php', function () {
    return view('/index');
});

Route::get('/kullanıcılar.blade.php', function () {
    return view('/kullanıcılar');
});
Route::post('adminlogin2',[adminController::class,'adminlogin2']);
Route::get('/contact',[adminController::class, 'user_show']);
Route::post('kullanıcı_add',[adminController::class,'kullanıcı_add']);