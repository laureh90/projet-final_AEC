<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RestaurantController;
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

// Page des 3 forfaits
Route::get('/discovery', [HotelController::class, 'packageOne']);
Route::get('/stairway', [HotelController::class, 'packageTwo']);
Route::get('/gourmet', [HotelController::class, 'packageThree']);

// Confirmation réservation client
Route::post('/reservation', [HotelController::class, 'storeReservation']);
Route::get('/reservation', [HotelController::class, 'index'])->name('reservation');
Route::get('/reservation/destroy/{id}', [HotelController::class, 'UserReservationDestroy']);

// Page d'accueil
Route::get('/', [HotelController::class, 'accueil']);

// Menu restautant
Route::get('menu', [RestaurantController::class, 'menuPerCategory']);

// Activités
Route::get('/activities', function () {
    return view('activities');
});

// publication
Route::get('/news', [PostController::class, 'all']);

/**
 *  Section administration
 */

// Reservation de tous les clients + Destroy
Route::get('admin/reservation', [HotelController::class, 'reservation'])->middleware(('admin'));
Route::get('admin/reservation/destroy/{id}', [HotelController::class, 'destroyReservation'])->middleware(('admin'));

// Liste de tous les administrateurs + update + destroy
Route::get('admin/list-admin/', [HotelController::class, 'listeAdmin'])->middleware(('admin'));
Route::get('admin/list-admin/update/{id}', [HotelController::class, 'listeAdminUpdate'])->middleware(('admin'));
Route::post('admin/list-admin/update', [HotelController::class, 'storeListeAdminUpdate'])->middleware(('admin'));
Route::get('admin/list-admin/destroy/{id}', [HotelController::class, 'listeAdminDestroy'])->middleware(('admin'));

// Liste de tous les users guest + update + destroy
Route::get('admin/list-guest/', [HotelController::class, 'listeGuest'])->middleware(('auth'));
Route::get('admin/list-guest/update/{id}', [HotelController::class, 'listeGuestUpdate'])->middleware(('admin'));
Route::post('admin/list-guest/update', [HotelController::class, 'StoreListeGuestUpdate'])->middleware(('admin'));
Route::get('admin/list-guest/destroy/{id}', [HotelController::class, 'listeGuestDestroy'])->middleware(('admin'));

// Menu formulaire + update + destroy (one page)
Route::get('admin/menu', [RestaurantController::class, 'menuAdmin'])->middleware(('admin'));
Route::post('admin/menu/update', [RestaurantController::class, 'StoreMenuAdminUpdate'])->middleware(('admin'));
Route::post('/admin/menu/store', [RestaurantController::class, 'storeMenu'])->middleware(('admin'));
Route::get('admin/menu/destroy/{id}', [RestaurantController::class, 'menuAdminDestroy'])->middleware(('admin'));

// Publication formulaire + update + destroy (one page)
Route::get('admin/post', [PostController::class, 'postAdmin'])->middleware(('admin'));
Route::post('admin/post/update', [PostController::class, 'storePostAdminUpdate'])->middleware(('admin'));
Route::post('/admin/post/store', [PostController::class, 'storePost'])->middleware(('admin'));
Route::get('admin/post/destroy/{id}', [PostController::class, 'postAdminDestroy'])->middleware(('admin'));


// Dashbord
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
