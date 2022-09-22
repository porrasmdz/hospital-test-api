<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'nombre' => $this->name,
            'email' => $this->email,
            'hospital' => $this->hospital,
            'direccion_hospital' => $this->hospital_address,
            'pacientes' => $this->patients
        ];
    }
}
