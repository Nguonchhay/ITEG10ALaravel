<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::get();
        return view('backends.doctors.index', [
            'doctors' => $doctors
        ]);
    }

    public function create()
    {
        return view('backends.doctors.create');
    }

    public function store(Request $request)
    {
        Doctor::create($request->all());
        return redirect()->route('backends.doctors.index');
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
