<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\StrukturController;
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



Route::redirect('/', 'portal');
Route::group(['prefix' => 'portal'], function () {
    Route::get('/', [PortalController::class, 'index'])->name('portal');
    Route::get('/contact', [PortalController::class, 'contact']);
    Route::post('/contact', [PortalController::class, 'postcontact']);
    Route::get('/platform', [PortalController::class, 'platform']);
    Route::get('/platform/{platform_name}', [PortalController::class, 'detailplatform']);
    Route::get('/about', [PortalController::class, 'about']);
    Route::get('/service', [PortalController::class, 'service']);
    Route::get('/portofolio', [PortalController::class, 'portofolio']);
    Route::get('/ourteam', [PortalController::class, 'ourteam']);
    Route::get('/ourteam/{team_name}', [PortalController::class, 'detailourteam']);
    Route::get('/aboutnet', [PortalController::class, 'aboutnet']);
    Route::get('/aboutgen', [PortalController::class, 'aboutgen']);
    Route::get('/test', [PortalController::class, 'test']);
    Route::get('/login_user', [LoginController::class, 'login_user'])->name('login_user');
    Route::post('/login_user', [LoginController::class, 'Check_login_user']);
    Route::get('/register_user', [LoginController::class, 'form_register_user'])->name('form_register_user');
    Route::post('/register_user', [LoginController::class, 'register_user'])->name('form_register_user_act');
    Route::get('/logout_portal', [LoginController::class, 'logout_portal']);
    Route::get('/view_test', [PortalController::class, 'view_test']);
});

Route::prefix('api')->group(function () {
    Route::post('/getkota', [LoginController::class, 'getkota'])->name('getkota.fetch');
    Route::post('/getkecamatan', [LoginController::class, 'getkecamatan'])->name('getkecamatan.fetch');
    Route::post('/getkelurahan', [LoginController::class, 'getkelurahan'])->name('getkelurahan.fetch');
});

Route::group(['prefix' => 'cms', 'middleware' => 'auth:web'], function () {
    Route::get('/', [DashboardController::class, 'home']);

    Route::get('/services', [DashboardController::class, 'services'])->name('services');
    Route::get('/addservices', [DashboardController::class, 'addservices']);
    Route::post('/addservices', [DashboardController::class, 'postservices']);
    Route::get('/{id}/editservices', [DashboardController::class, 'editservices']);
    Route::put('/services/{id}', [DashboardController::class, 'updateservices']);
    Route::delete('/services/{id}', [DashboardController::class, 'destroyservices']);


    Route::get('/portofolio', [DashboardController::class, 'portofolio'])->name('portofolio');
    Route::get('/addportofolio', [DashboardController::class, 'addportofolio']);
    Route::post('/addportofolio', [DashboardController::class, 'postportofolio']);
    Route::get('/{id}/editportofolio', [DashboardController::class, 'editportofolio']);
    Route::put('/portofolio/{id}', [DashboardController::class, 'updateportofolio']);
    Route::delete('/portofolio/{id}', [DashboardController::class, 'destroyportofolio']);

    Route::get('/smgen_team', [DashboardController::class, 'smgen_team'])->name('smgen_team');
    Route::get('/addsmgen_team', [DashboardController::class, 'addsmgen']);
    Route::post('/addsmgen_team', [DashboardController::class, 'postsmgen']);
    Route::get('/{id}/editsmgen_team', [DashboardController::class, 'editsmgen']);
    Route::put('/smgen_team/{id}', [DashboardController::class, 'updatesmgen']);
    Route::delete('/smgen_team/{id}', [DashboardController::class, 'destroysmgen']);

    Route::get('/kantorwilayah', [DashboardController::class, 'kantorwilayah'])->name('kantorwilayah');
    Route::get('/addkantorwilayah', [DashboardController::class, 'addkantorwilayah']);
    Route::post('/addkantorwilayah', [DashboardController::class, 'postkantorwilayah']);
    Route::delete('/kantorwilayah/{id}', [DashboardController::class, 'destroykantorwilayah']);
    Route::get('/{id}/editkantorwilayah', [DashboardController::class, 'editkantorwilayah']);
    Route::put('/kantorwilayah/{id}', [DashboardController::class, 'updatekantorwilayah']);

    Route::get('/{kantorwilayah_id}/struktur_kantorwilayah', [StrukturController::class,'struktur_kanwil'])->name('struktur');
    Route::post('/{kantorwilayah_id}/struktur_kantorwilayah', [StrukturController::class,'tambahposisi']);
    Route::get('/{kantorwilayah_id}/struktur_kanwil/addstruktur', [StrukturController::class, 'addstruktur']);
    Route::post('/{kantorwilayah_id}/struktur_kanwil/addstruktur', [StrukturController::class, 'poststruktur']);
    Route::get('/{kantorwilayah_id}/struktur_kanwil/{id}/editstruktur', [StrukturController::class, 'editstruktur']);
    Route::put('/{kantorwilayah_id}/struktur_kanwil/editstruktur/{id}', [StrukturController::class, 'updatestruktur']);
    Route::delete('/{kantorwilayah_id}/struktur_kanwil/{id}', [StrukturController::class, 'destroystruktur']);



    Route::get('/platform', [DashboardController::class, 'platform'])->name('platform');
    Route::get('/addplatform', [DashboardController::class, 'addplatform']);
    Route::post('/addplatform', [DashboardController::class, 'postplatform']);
    Route::get('/{id}/editplatform', [DashboardController::class, 'editplatform']);
    Route::put('/platform/{id}', [DashboardController::class, 'updateplatform']);
    Route::delete('/platform/{id}', [DashboardController::class, 'destroyplatform']);

    Route::get('/{platform_id}/detail_platform', [PlatformController::class,'detail_platform'])->name('detail_platform');
    Route::get('/{platform_id}/detail_platform/adddetail', [PlatformController::class, 'add_detail_platform']);
    Route::post('/{platform_id}/detail_platform/adddetail', [PlatformController::class, 'post_detail_platform']);
    Route::get('/{platform_id}/detail_platform/{id}/editdetail', [PlatformController::class, 'edit_detail_platform']);
    Route::put('/{platform_id}/detail_platform/detail/{id}', [PlatformController::class, 'update_detail_platform']);
    Route::delete('/{platform_id}/detail_platform/{id}',[PlatformController::class, 'destroy_detail_platform']);


    Route::get('/user', [DashboardController::class, 'user'])->name('user_form');
    Route::get('/adduser', [DashboardController::class, 'adduser']);
    Route::post('/adduser', [DashboardController::class, 'postuser']);
    Route::get('/{id}/edituser', [DashboardController::class, 'edituser']);
    Route::put('/user/{id}', [DashboardController::class, 'updateuser']);
    Route::delete('/user/{id}', [DashboardController::class, 'destroyuser']);


    Route::get('/contact', [DashboardController::class, 'contact'])->name('contact');
    Route::get('/addcontact', [DashboardController::class, 'addcontact']);
    Route::post('/addcontact', [DashboardController::class, 'postcontact']);
    Route::get('/{id}/editcontact', [DashboardController::class, 'editcontact']);
    Route::put('/contact/{id}', [DashboardController::class, 'updatecontact']);
    Route::delete('/contact/{id}', [DashboardController::class, 'destroycontact']);

    Route::get('/position', [DashboardController::class, 'position'])->name('position');
    Route::get('/addposition', [DashboardController::class, 'addposition']);
    Route::post('/addposition', [DashboardController::class, 'postposition']);
    Route::get('/{id}/editposition', [DashboardController::class, 'editposition']);
    Route::put('/position/{id}', [DashboardController::class, 'updateposition']);
    Route::delete('/position/{id}', [DashboardController::class, 'destroyposition']);

    Route::get('/userportal', [DashboardController::class, 'user_portal'])->name('user_portal');
    Route::get('/adduser_portal', [DashboardController::class, 'adduser_portal']);
    Route::post('/adduser_portal', [DashboardController::class, 'postuser_portal']);
    Route::get('/{id}/edituser_portal', [DashboardController::class, 'edituser_portal']);
    Route::put('/user_portal/{id}', [DashboardController::class, 'updateuser_portal']);
    Route::delete('/userportal/{id}', [DashboardController::class, 'destroyuser_portal']);


});



Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
