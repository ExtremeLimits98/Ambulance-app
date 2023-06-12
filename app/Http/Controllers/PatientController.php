<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::where('jmbg', 123456789)->join('locations', 'locations.id', '=', 'patients.location_id')->get();
        return view('patient.index')->with(compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store()
    {
        return view('patient.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        $locations = Location::all();
        return view('patient.new')->with(compact('locations'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        // 
        $locations = Location::all();
        return view('patient.new')->with(compact('locations'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
