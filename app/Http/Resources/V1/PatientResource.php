<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
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
            'id' => $this->id,

            'registrado_en' => $this->registered_at,
            'actualizado_en' => $this->modified_at,
            'nombres'=> $this->names,
            'apellidos'=> $this->lastnames,
            'genero'=> $this->gender,
            'celular'=> $this->cellphone,
            'telefono'=> $this->phone_number,
            'edad'=> $this->age,
            'oficio' => $this->occupation,
            'nacimiento'=>$this->born_date,
            'estado_civil'=>$this->civil_status,
            'nacionalidad'=>$this->nationality,
            'ciudad_residencia'=> $this->residence_city,
            'domicilio'=>$this->address,
            'grado_educativo'=>$this->education_grade,
            'email'=>$this->email,
            'cedula'=>$this->city_id,

            'doctor' => [
                'nombre'=> $this->user->name,
                'hospital'=> $this->user->hospital
            ],
            'citas_medicas'=> $this->medical_citations,
            'fichas_medicas'=> $this->medical_histories,
            'user_id '=>$this->user_id
        ];
    }
}
