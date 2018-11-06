<?php

namespace App\Http\Resources\Jobrole;

use Illuminate\Http\Resources\Json\JsonResource;

class JobroleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
