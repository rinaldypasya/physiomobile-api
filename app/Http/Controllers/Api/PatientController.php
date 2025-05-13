<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Create a new patient.
     *
     * @group Patients
     * @header accessKey required Your API access key.
     * 
     * @bodyParam name string required The full name of the patient.
     * @bodyParam id_type string required The type of ID (e.g. ktp, passport).
     * @bodyParam id_no string required The identification number.
     * @bodyParam gender string required Male or female.
     * @bodyParam dob date required Date of birth in Y-m-d format. Example: 1990-01-01
     * @bodyParam address string required Patient's address.
     * @bodyParam medium_acquisition string required How the patient was acquired (e.g., online, referral).
     *
     * @response 201 {
     *   "id": 1,
     *   "user_id": 5,
     *   "medium_acquisition": "referral",
     *   ...
     * }
     */
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

    /**
     * Update an existing patient.
     *
     * @group Patients
     * @urlParam id integer required The ID of the patient.
     * @header accessKey required Your API access key.
     *
     * @bodyParam name string required The full name of the patient.
     * @bodyParam id_type string required The type of ID.
     * @bodyParam id_no string required The identification number.
     * @bodyParam gender string required Male or female.
     * @bodyParam dob date required Date of birth. Example: 1990-01-01
     * @bodyParam address string required Patient's address.
     * @bodyParam medium_acquisition string required Acquisition method.
     *
     * @response 200 {
     *   "message": "Patient updated successfully",
     *   ...
     * }
     */
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

    /**
     * Delete a patient.
     *
     * @group Patients
     * @urlParam id integer required The ID of the patient.
     * @header accessKey required Your API access key.
     *
     * @response 204 {}
     */
    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->user()->delete(); // cascade
        $patient->delete();

        return response()->json(['message' => 'Deleted']);
    }

    /**
     * Get a list of all patients.
     *
     * @group Patients
     * @header accessKey required Your API access key.
     *
     * @response 200 [
     *   {
     *     "id": 1,
     *     "user_id": 5,
     *     "medium_acquisition": "referral",
     *     ...
     *   }
     * ]
     */
    public function index()
    {
        return response()->json(Patient::with('user')->get());
    }

    /**
     * Get details of a specific patient.
     *
     * @group Patients
     * @urlParam id integer required The ID of the patient.
     * @header accessKey required Your API access key.
     *
     * @response 200 {
     *   "id": 1,
     *   "user_id": 5,
     *   "medium_acquisition": "referral",
     *   ...
     * }
     */
    public function show($id)
    {
        $patient = Patient::with('user')->findOrFail($id);
        return response()->json($patient);
    }
}

