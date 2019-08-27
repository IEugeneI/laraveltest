<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class COUNTRYResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // var_dump($request);
        return [
            'type'          => 'country',
            'attributes'    => [
                'COUNTRY_ID' => $this->COUNTRY_ID,
                'COUNTRY_ISO3' => $this->COUNTRY_ISO3,
                'COUNTRY_NAME' => $this->COUNTRY_NAME,
            ],
        ];
    }
}
