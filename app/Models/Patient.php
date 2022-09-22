<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Citation;
use App\Models\History;
class Patient extends Model
{
    use HasFactory;
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function getRegisteredAtAttribute() {
        return $this->created_at->format('d/m/Y');
    }
    public function getMedicalHistoriesAttribute() {
        $histories = History::where('patient_id', $this->id)->get();
        return $histories;
    }
    public function getMedicalCitationsAttribute() {
        $citations = Citation::where('patient_id', $this->id)->get();
        return $citations;
    }

    public function getModifiedAtAttribute() {
        return $this->updated_at->format('d/m/Y');
    }
}
