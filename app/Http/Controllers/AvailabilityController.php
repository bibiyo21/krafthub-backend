<?php

namespace App\Http\Controllers;

use App\Models\Availability;
use Illuminate\Http\Request;

class AvailabilityController extends Controller
{
    public function create(Request $request) 
    {
        $request->validate([
            'job_id' => 'required',
            'time_in' => 'required',
            'time_out' => 'required',
        ]);

        Availability::create([
            'user_id' => auth()->user()->id, 
            'job_id' => $request->input('job_id'), 
            'time_in' => $request->input('time_in'), 
            'time_out' => $request->input('time_out'), 
        ]);

        return response([
            'message' => 'availability created successfully',
        ], 200);
    }

    public function update(Request $request) 
    {
        $request->validate([
            'availability_code' => 'required',
            'job_id' => 'required',
            'time_in' => 'required',
            'time_out' => 'required',
        ]);

        $availability = Availability::find($request->input('availability_code'));

        $availability->job_id = $request->input('job_id');
        $availability->time_in = $request->input('time_in');
        $availability->time_out = $request->input('time_out');

        $availability->save();

        return response([
            'message' => 'availability updated successfully',
        ], 200);
    }
}
