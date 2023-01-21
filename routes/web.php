<?php

use App\Http\Controllers\SuratController;
use App\Http\Livewire\AkunPage;
use App\Http\Livewire\JenisUsahaPage;
use App\Http\Livewire\Page\Auth\LoginPage;
use App\Http\Livewire\Page\Auth\RegisterPage;
use App\Http\Livewire\Page\Home;
use App\Http\Livewire\Page\ProfilPage;
use App\Http\Livewire\PengajuanSituPage;
use App\Http\Livewire\SituDetailPage;
use App\Http\Livewire\SituPage;
use App\Http\Livewire\Umum\SituSayaPage;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('login', LoginPage::class);
Route::get('register', RegisterPage::class);


Route::middleware(['islogin'])->group(function () {
    // Route::get('/', Home::class);

    Route::get('profil', ProfilPage::class);


    Route::get('situ', SituPage::class);
    Route::get('jenis-usaha', JenisUsahaPage::class);

    Route::get('pengajuan-situ', PengajuanSituPage::class);
    Route::get('situ-saya', SituSayaPage::class);
    Route::get('situ-detail/{id}', SituDetailPage::class);


    Route::get('akun', AkunPage::class);


    Route::get('surat/{id}', [SuratController::class, 'index']);



});
