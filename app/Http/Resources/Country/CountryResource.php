<?php

namespace App\Http\Resources\Country;

use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'code' => $this->code,
            'name' => $this->name,

            'href' =>[
                'regions' => route('regions.index',$this->id)
            ]
        ];
    }
}
