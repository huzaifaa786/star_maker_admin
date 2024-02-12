<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Api;
use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function createRoom(Request $request){
        $room = Room::create($request->all());
        return Api::setResponse('room', $room);
    }
}
