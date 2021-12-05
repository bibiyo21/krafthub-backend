<?php

namespace App\Http\Controllers;

use App\Models\Availability;
use Illuminate\Http\Request;
use DB;

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

    public function jobUsers(Request $request) 
    {
        $users = DB::table('availabilities')
            ->select(
                DB::raw(
                    "users.first_name, users.last_name, availabilities.time_in, availabilities.time_out, jobs_parent.title as profession, jobs.title as specialty"
                )
            )
            ->join('users', 'users.id', '=','availabilities.user_id')
            ->join('jobs', 'jobs.id', '=','availabilities.job_id')
            ->join('jobs as jobs_parent', 'jobs.parent_id', '=','jobs_parent.id');
        
// dd(session('users'));
//         if (auth()->check()) {
//             // dd('wew');
//             $users->where('availabilities.user_id', '!=', auth()->user()->id);
//         }

        if ($request->has('user_name') && $request->filled('user_name')) {
            $users->where(function ($query) use ($request) {
                $query->where('users.first_name', 'like', '%'. $request->get('user_name') . '%');
                $query->OrWhere('users.last_name', 'like', '%'. $request->get('user_name') . '%');
            });
        }

        if ($request->has('jobId') && $request->filled('jobId')) {
            $users->where('parent_id', '=', $request->get('jobId'));
        }

        if ($request->has('jobType') && $request->filled('jobType')) {
            $users->where('availabilities.job_id', '=', $request->get('jobType'));
        }

        // dd($users);
        return response([
            'results' => $users->get()->all()
        ], 200); 
    }

    public function myJobs(Request $request) 
    {
        $users = DB::table('availabilities')
            ->select(
                DB::raw(
                    "users.first_name, users.last_name, availabilities.time_in, availabilities.time_out, jobs_parent.title as profession, jobs.title as specialty"
                )
            )
            ->join('users', 'users.id', '=','availabilities.user_id')
            ->join('jobs', 'jobs.id', '=','availabilities.job_id')
            ->join('jobs as jobs_parent', 'jobs.parent_id', '=','jobs_parent.id')
            ->where('availabilities.user_id', '=', auth()->user()->id);

        return response([
            'results' => $users->get()->all()
        ], 200); 
    }
}
