<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class HotelDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'stars' => $this->stars,
            'image' => $this->image,
            'fromDate' => Carbon::now()->addDays(30)->format("Y-m-d H:i:s"),
            'toDate' => Carbon::now()->addDays(30 + $this->duration)->format("Y-m-d H:i:s"),
        ];
    }
}
