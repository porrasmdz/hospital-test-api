<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;

use App\Http\Resources\V1\HistoryResource;


class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return HistoryResource::collection(History::latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $history = new History();
        $history->hospital_motive = $request->hospital_motive;
        $history->actual_disease= $request->actual_disease;
        $history->disease_bg = $request->disease_bg;
        $history->family_bg = $request->family_bg;
        $history->habits = $request->habits;
        $history->smoke = $request->smoke;
        $history->drugs = $request->drugs;
        $history->drinks = $request->drinks;
        $history->couple = $request->couple;
        $history->eating = $request->eating;
        $history->sleep = $request->sleep;
        $history->sexuality = $request->sexuality;
        $history->workout = $request->workout;
        $history->allergies = $request->allergies;
        $history->patient_id = $request->patient_id;

        $history->save();
        return $history;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function show(History $history)
    {
        return new HistoryResource($history);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $history = History::findOrFail($request->id);
        $history->hospital_motive = $request->hospital_motive;
        $history->actual_disease= $request->actual_disease;
        $history->disease_bg = $request->disease_bg;
        $history->family_bg = $request->family_bg;
        $history->habits = $request->habits;
        $history->smoke = $request->smoke;
        $history->drugs = $request->drugs;
        $history->drinks = $request->drinks;
        $history->couple = $request->couple;
        $history->eating = $request->eating;
        $history->sleep = $request->sleep;
        $history->sexuality = $request->sexuality;
        $history->workout = $request->workout;
        $history->allergies = $request->allergies;
        $history->patient_id = $request->patient_id;

        $history->save();
        return $history;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $history = History::destroy($request->id);
        return $history;
    }
}
