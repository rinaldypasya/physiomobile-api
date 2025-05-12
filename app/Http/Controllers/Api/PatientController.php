<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'id_type' => 'required|string',
            'id_no' => 'required|string',
            'gender' => 'required|in:male,female',
            'dob' => 'required|date',
            'address' => 'required|string',
            'medium_acquisition' => 'required|string',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'id_type' => $validated['id_type'],
            'id_no' => $validated['id_no'],
            'gender' => $validated['gender'],
            'dob' => $validated['dob'],
            'address' => $validated['address'],
            'email' => uniqid() . '@example.com',
            'password' => bcrypt('password'), // dummy
        ]);

        $patient = Patient::create([
            'user_id' => $user->id,
            'medium_acquisition' => $validated['medium_acquisition'],
        ]);

        return response()->json($patient->load('user'));
    }

    public function update(Request $request, $id)
    {
        $patient = Patient::findOrFail($id);
        $user = $patient->user;

        $validated = $request->validate([
            'name' => 'required|string',
            'id_type' => 'required|string',
            'id_no' => 'required|string',
            'gender' => 'required|in:male,female',
            'dob' => 'required|date',
            'address' => 'required|string',
            'medium_acquisition' => 'required|string',
        ]);

        $user->update([
            'name' => $validated['name'],
            'id_type' => $validated['id_type'],
            'id_no' => $validated['id_no'],
            'gender' => $validated['gender'],
            'dob' => $validated['dob'],
            'address' => $validated['address'],
        ]);

        $patient->update(['medium_acquisition' => $validated['medium_acquisition']]);

        return response()->json($patient->load('user'));
    }

    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->user()->delete(); // cascade
        $patient->delete();

        return response()->json(['message' => 'Deleted']);
    }

    public function index()
    {
        return response()->json(Patient::with('user')->get());
    }

    public function show($id)
    {
        $patient = Patient::with('user')->findOrFail($id);
        return response()->json($patient);
    }
}

