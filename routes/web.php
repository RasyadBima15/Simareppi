<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuratController;
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
    return view('welcome');
});

Route::get('/dashboard', [LoginController::class, 'showDashboard'])->middleware('auth')->name('dashboard');
Route::get('/login', function () {
    return view('login');
})->middleware('guest')->name('login');

Route::post('/login', [LoginController::class, 'authenticateUser'])->name('authenticateUser');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/incomingMessage', [SuratController::class, 'viewSuratMasuk'])->name('viewSuratMasuk');
Route::get('/outgoingMessage', [SuratController::class, 'viewSuratKeluar'])->name('viewSuratKeluar');
Route::get('/profile', [SuratController::class, 'viewProfile'])->name('viewProfile');
Route::get('/addIncomingMessage', [SuratController::class, 'viewAddIncomingMessage'])->name('viewAddIncomingMessage');
Route::get('/addOutgoingMessage', [SuratController::class, 'viewAddOutgoingMessage'])->name('viewAddOutgoingMessage');
Route::get('/editIncomingMessage/{id}', [SuratController::class, 'viewEditIncomingMessage'])->name('viewEditIncomingMessage');
Route::get('/editOutgoingMessage/{id}', [SuratController::class, 'viewEditOutgoingMessage'])->name('viewEditOutgoingMessage');

Route::post('/profile', [SuratController::class, 'saveProfile'])->name('saveProfile');

Route::post('/addIncomingMessage', [SuratController::class, 'addIncomingMessage'])->name('addIncomingMessage');
Route::post('/addOutgoingMessage', [SuratController::class, 'addOutgoingMessage'])->name('addOutgoingMessage');
Route::post('/editIncomingMessage/{id}', [SuratController::class, 'editIncomingMessage'])->name('editIncomingMessage');
Route::post('/editOutgoingMessage/{id}', [SuratController::class, 'editOutgoingMessage'])->name('editOutgoingMessage');

Route::get('/viewIncomingMessage/{id}', [SuratController::class, 'viewIncomingMessage'])->name('viewIncomingMessage');
Route::get('/viewOutgoingMessage/{id}', [SuratController::class, 'viewOutgoingMessage'])->name('viewOutgoingMessage');

Route::delete('/deleteIncomingMessage/{id}', [SuratController::class, 'deleteIncomingMessage'])->name('deleteIncomingMessage');
Route::delete('/deleteOutgoingMessage/{id}', [SuratController::class, 'deleteOutgoingMessage'])->name('deleteOutgoingMessage');

Route::post('/incomingMessage/searchIncoming', [SuratController::class, 'searchIncoming'])->name('searchIncoming');
Route::post('/outgoingMessage/searchOutgoing', [SuratController::class, 'searchOutgoing'])->name('searchOutgoing');





