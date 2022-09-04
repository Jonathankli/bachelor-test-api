<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HotelDetailResource;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function getHotel(Request $request, $id)
    {
        env("SLEEP", 1);
        return HotelDetailResource::make(Hotel::findOrFail($id));
    }
}
