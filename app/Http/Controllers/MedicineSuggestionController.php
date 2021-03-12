<?php

namespace App\Http\Controllers;

use App\Models\MedicineSuggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MedicineSuggestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return MedicineSuggestion::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        //
       $validate = Validator::make($request->all(), [
            'symptom_name' => 'required',
            'medicine_name' => 'required' ,
            'medicine_days' => 'required',
            'medicine_morning' => 'required',
            'medicine_afternoon' => 'required',
            'medicine_evening' => 'required',
            'medicine_night' => 'required',
            'medicine_continues' => 'required',
        ]);

        if ($validate->fails()){
            return response()->json(['status' => false , 'message' => $validate->errors(), 'data' => $request]);
        }else{
            return response()->json(['status' => true , 'message' => 'success']);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicineSuggestion  $medicineSuggestion
     * @return \Illuminate\Http\Response
     */
    public function show(MedicineSuggestion $medicineSuggestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicineSuggestion  $medicineSuggestion
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicineSuggestion $medicineSuggestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MedicineSuggestion  $medicineSuggestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicineSuggestion $medicineSuggestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicineSuggestion  $medicineSuggestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineSuggestion $medicineSuggestion)
    {
        //
    }
}