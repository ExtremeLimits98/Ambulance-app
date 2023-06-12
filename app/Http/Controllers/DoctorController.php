<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::join('doctor_types', 'doctor_type_id', '=', 'doctors.doctor_type_id')->join('users', 'user_id', '=', 'users.id')->get();
        return view('doctor.index')->with(compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function new()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        Doctor::where('id', $id)->delete();
        // TODO treba uraditi redirect nazad na stranicu za prikaz svih doktora 
    }
}
