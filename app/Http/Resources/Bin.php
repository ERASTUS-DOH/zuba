<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Bin extends JsonResource
{
    /**
     * Transform the Bins data into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nick_name' => $this->nickname,
            'serial_number'=> $this->serialNumber,
            'max_level'=> $this->max_level,
            'max_weight'=> $this->maxWeight,
            'current_weight' => $this->current_weight,
            'current_level' => $this->current_level,
            'location_long'=> $this->location_long,
            'location_lat'=> $this->location_lat,
            'smoke_noti'=> $this->smokeNoti
        ];
    }
}
