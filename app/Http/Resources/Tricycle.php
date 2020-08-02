<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Tricycle extends JsonResource
{
    /**
     * Transform the tricycle data into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'reg_number' => $this->regNumber,
            'color'=> $this->colour,
            'brand'=> $this->brand,
            'max_capacity'=> $this->max_capacity,
            'assign_state' => $this->assign_state,
        ];
    }
}
