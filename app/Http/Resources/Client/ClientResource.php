<?php

namespace App\Http\Resources\Client;

use Illuminate\Http\Resources\Json\Resource;

class ClientResource extends Resource
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
            'name' => $this->client_name,
            'maincontact' => $this->main_contact,
            'address1' => $this->address,
            'zip' => $this->zip,
            'city' => $this->city,
            'fulladdress' => $this->address . ', '
                            . $this->zip . ' ' 
                            . $this->city,
            'phone' => $this->phone,
            'email' => $this->email

        ];
    }
}
