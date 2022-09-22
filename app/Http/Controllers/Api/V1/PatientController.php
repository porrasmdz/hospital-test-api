<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

use App\Http\Resources\V1\PatientResource;



class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PatientResource::collection(Patient::latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = new Patient();
        $patient->names = $request->names;
        $patient->lastnames= $request->lastnames;
        $patient->gender = $request->gender;
        $patient->cellphone = $request->cellphone;
        $patient->phone_number = $request->phone_number;
        $patient->age = $request->age;
        $patient->occupation = $request->occupation;
        $patient->born_date = $request->born_date;
        $patient->civil_status = $request->civil_status;
        $patient->nationality = $request->nationality;
        $patient->residence_city = $request->residence_city;
        $patient->address = $request->address;
        $patient->education_grade = $request->education_grade;
        $patient->email = $request->email;
        $patient->city_id = $request->city_id;
        $patient->user_id = $request->user_id;

        $patient->save();
        return $patient;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
        return new PatientResource($patient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $patient = Patient::findOrFail($request->id);
        $patient->names = $request->names;
        $patient->lastnames= $request->lastnames;
        $patient->gender = $request->gender;
        $patient->cellphone = $request->cellphone;
        $patient->phone_number = $request->phone_number;
        $patient->age = $request->age;
        $patient->occupation = $request->occupation;
        $patient->born_date = $request->born_date;
        $patient->civil_status = $request->civil_status;
        $patient->nationality = $request->nationality;
        $patient->residence_city = $request->residence_city;
        $patient->address = $request->address;
        $patient->education_grade = $request->education_grade;
        $patient->email = $request->email;
        $patient->city_id = $request->city_id;
        $patient->user_id = $request->user_id;

        $patient->save();
        return $patient;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $patient = Patient::destroy($request->id);
        return $patient;
    }
}
