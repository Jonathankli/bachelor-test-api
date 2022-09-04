<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HotelTeaserResource;
use App\Models\Hotel;
use Illuminate\Http\Request;

class TeaserController extends Controller
{
    public function getHotel(Request $request, $id)
    {
        env("SLEEP", 1);
        return HotelTeaserResource::make(Hotel::findOrFail($id));
    }
}
