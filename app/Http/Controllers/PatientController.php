<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index() {
        return view('index',[
        'patients' => Patient::latest()->paginate()]);
    }
}
