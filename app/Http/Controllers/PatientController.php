<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Inertia\Inertia;
use Illuminate\Support\Facades\URL;
use Illuminate\Routing\Route;

use App\Http\Resources\V1\PatientResource;
class PatientController extends Controller
{
    public function index() {
        $patients = Patient::latest()->paginate();
        return Inertia::render('welcome' , compact(['patients']));
    }
    public function show(Request $request) {
         $id = $request->route('id');

        $patient = Patient::findOrFail($id);

        $resource =  new PatientResource($patient);
        return Inertia::render('patients', compact('resource'));
    }



}
