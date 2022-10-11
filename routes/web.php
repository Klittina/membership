<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\MembershipController;
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
// Club:
Route::get('/api/clubs', [ClubController::class, 'index']);

Route::get('/api/clubs/{id}', [ClubController::class, 'show']);

Route::post('/api/clubs',  [ClubController::class, 'store']);

Route::put('/api/clubs/{id}', [ClubController::class, 'update']);

Route::delete('/api/clubs/{id}', [ClubController::class, 'destroy']);

Route::get('/club/list', [ClubController::class, 'listView']);

Route::get('/club/new', [ClubController::class, 'newView']);

Route::get('/club/destroy', [ClubController::class, 'destroyView']);

// Membership
Route::get('/api/memberships', [MembershipController::class, 'index']);

Route::get('/api/memberships/{id}', [MembershipController::class, 'show']);

Route::post('/api/memberships',  [MembershipController::class, 'store']);

Route::put('/api/memberships/{id}', [MembershipController::class, 'update']);

Route::delete('/api/memberships/{id}', [MembershipController::class, 'destroy']);

Route::get('/membership/list', [MembershipController::class, 'listView']);

Route::get('/membership/new', [MembershipController::class, 'newView']);

Route::get('/membership/destroy', [MembershipController::class, 'destroyView']);
