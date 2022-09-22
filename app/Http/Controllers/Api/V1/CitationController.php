<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Citation;
use Illuminate\Http\Request;


use App\Http\Resources\V1\CitationResource;

class CitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CitationResource::collection(Citation::latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $citation = new Citation();
        $citation->citation = $request->citation;
        $citation->time= $request->time;
        $citation->patient_id= $request->patient_id;

        $citation->save();
        return $citation;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Citation  $citation
     * @return \Illuminate\Http\Response
     */
    public function show(Citation $citation)
    {
        return new CitationResource($citation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Citation  $citation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $citation = Citation::findOrFail($request->id);
        $citation->citation = $request->citation;
        $citation->time= $request->time;
        $citation->patient_id= $request->patient_id;

        $citation->save();
        return $citation;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Citation  $citation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $request = Citation::destroy($request->id);
        return $request;
    }
}
