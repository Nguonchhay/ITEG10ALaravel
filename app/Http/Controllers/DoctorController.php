<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::get();
        return view('pages.doctors', [
            'doctors' => $doctors
        ]);
    }

    public function create()
    {
        return view('pages.doctors.create');
    }

    public function store(Request $request)
    {

    }

    public function edit(Doctor $doctor)
    {

    }

    public function update(Doctor $doctor, Request $request)
    {

    }

    public function destroy(Doctor $doctor)
    {

    }
}
