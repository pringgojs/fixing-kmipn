<?php

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

Route::get('/', ['as' => 'home', 'uses' => 'Frontend\PagesController@index'])->name('home');
Route::get('/tentang', ['as' => 'tentang', 'uses' => 'Frontend\PagesController@tentang']);
Route::get('/lomba', ['as' => 'lomba', 'uses' => 'Frontend\PagesController@lomba']);
Route::get('/info', ['as' => 'info', 'uses' => 'Frontend\PagesController@info']);
Route::get('/login', ['as' => 'login', 'uses' => 'Frontend\PagesController@viewLogin']);
Route::get('/register', ['as' => 'view.register', 'uses' => 'Frontend\PagesController@viewRegister']);
Route::get('/forgot', 'Frontend\PagesController@forgot');
Route::get('/faq', ['as' => 'view.faq', 'uses' => 'Frontend\PagesController@viewFaq']);
Route::get('/jadwal-pelaksanaan', ['as' => 'view.jadwal', 'uses' => 'Frontend\PagesController@viewJadwal']);
Route::get('/artikel/{slug}', ['as' => 'view.artikel', 'uses' => 'Frontend\PagesController@viewArtikel']);

Route::get('/iot', ['as' => 'iot', 'uses' => 'Frontend\PagesController@iot']);
Route::get('/bistik', ['as' => 'bistik', 'uses' => 'Frontend\PagesController@bistik']);
Route::get('/hackathon', ['as' => 'iot', 'uses' => 'Frontend\PagesController@hackathon']);
Route::get('/anim', ['as' => 'anim', 'uses' => 'Frontend\PagesController@anim']);
Route::get('/game', ['as' => 'game', 'uses' => 'Frontend\PagesController@game']);
Route::get('/egov', ['as' => 'egov', 'uses' => 'Frontend\PagesController@egov']);
Route::get('/jaringan', ['as' => 'jaringan', 'uses' => 'Frontend\PagesController@jaringan']);
Route::get('/cipta', ['as' => 'cipta', 'uses' => 'Frontend\PagesController@cipta']);

Route::group(['prefix' => 'ecodeeepis'], function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('ecodeeepis.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('ecodeeepis.login.submit');
    Route::get('/', 'Backend\AdminController@admin')->name('ecodeeepis.dashboard');
    Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\AdminLoginController@logout']);

    Route::resource('users', 'Backend\UsersController');
    Route::resource('admin', 'Backend\AdminController');
    Route::resource('lomba', 'Backend\LombaController');
    Route::resource('artikel', 'Backend\ArtikelController');
    Route::resource('galeri', 'Backend\GaleriController');
    Route::resource('kategori', 'Backend\KategoriController');
    Route::resource('politeknik', 'Backend\PoliteknikController');
    Route::resource('indikator', 'Backend\IndikatorController');
    
    Route::post('juri/set-juri', 'Backend\JuriController@setJuri');
    Route::get('juri/random/{juri}/{random}', 'Backend\JuriController@random');
    Route::get('juri/cek-jumlah/{juri}', 'Backend\JuriController@cekJumlah');
    Route::resource('juri', 'Backend\JuriController');

    Route::get('/pendaftaran/{id}/edit', ['as' => 'pendaftaran.edit', 'uses' => 'Backend\PendaftaranController@edit']);
    Route::resource('pendaftaran', 'Backend\PendaftaranController', [ 'only' => [
        'update','destroy'
      ]]);

    Route::get('/set-lulus/{id}', 'Backend\PendaftaranController@setLolos');
    Route::get('/verifikasi/{id}', 'Backend\PendaftaranController@verifikasi');
    Route::get('/pendaftaran/{type}', 'Backend\PendaftaranController@daftar');
    Route::get('penjurian', 'Backend\PenjurianController@index');
});

// Login Routes...
Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');
Route::post('/auth/login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
Route::get('/auth/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
Route::post('/auth/register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);

//Forgot Reset Password
Route::post('/auth/forgot', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');

//Backend Routes

//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['user_actived']], function() {
    Route::group(['middleware' => ['auth']], function() {
        Route::get('/profile/verifikasi', 'Frontend\PagesController@verifikasi');
        Route::get('/profile/dashboard', ['as' => 'view.profile', 'uses' => 'Frontend\PagesController@viewProfile']);
        Route::get('/profile/tambah-anggota', ['as' => 'view.addanggota', 'uses' => 'Frontend\PagesController@viewAddAnggota']);
        Route::get('/profile/anggota', ['as' => 'view.anggota', 'uses' => 'Frontend\PagesController@viewAnggota']);
        Route::get('/profile/proposal', ['as' => 'view.proposal', 'uses' => 'Frontend\PagesController@viewProposal']);
        Route::get('/profile/info-tim', ['as' => 'view.info', 'uses' => 'Frontend\PagesController@viewInfoTim']);
        Route::get('/profile/edit_anggota/{id}', ['as' => 'view.edit_anggota', 'uses' => 'Frontend\PagesController@edit_anggota']);
        Route::post('/profile/submit_edit_anggota/{id}', ['as' => 'view.submit_edit_anggota', 'uses' => 'Frontend\PagesController@submit_edit_anggota']);
        Route::post('/profile/submit_add_anggota/', ['as' => 'view.submit_add_anggota', 'uses' => 'Frontend\PagesController@submit_add_anggota']);
        Route::get('/profile/submit_delete_anggota/{id}', ['as' => 'view.submit_delete_anggota', 'uses' => 'Frontend\PagesController@submit_delete_anggota']);

        Route::post('/profile/submit_edit_tim/{id}', ['as' => 'view.submit_edit_tim', 'uses' => 'Frontend\PagesController@submit_edit_tim']);
    });
});

Route::group(['prefix' => 'juri', 'namespace' => 'Frontend'], function() {
    Route::post('login', 'JuriController@loginProcess');
    Route::get('logout', 'JuriController@logout');
    Route::get('login', 'JuriController@login');

    Route::group(['middleware' => ['role:juri']], function() {
        Route::post('/{id}', 'JuriController@store');
        Route::get('/{id}', 'JuriController@nilai');
        Route::get('/', 'JuriController@index');
    });
});
Route::get('exp', 'Frontend\JuriController@exp');