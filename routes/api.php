<?php

use App\Http\Controllers\Api\RoomController;
use App\Http\Controllers\Api\SongController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::any('songs/all', [SongController::class, 'index']);
Route::any('room/create', [RoomController::class, 'createRoom']);
Route::any('room/update/count', [RoomController::class, 'updateRoomCount']);
Route::any('room/update/status', [RoomController::class, 'updateRoomStatus']);
Route::any('rooms/multi/all', [RoomController::class, 'getMultiRooms']);
Route::any('rooms/solo/all', [RoomController::class, 'getSoloRooms']);
