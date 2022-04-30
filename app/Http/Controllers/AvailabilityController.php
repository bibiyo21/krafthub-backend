<?php

namespace App\Http\Controllers;

use App\Models\Availability;
use Illuminate\Http\Request;
use App\Models\Postimage;
use DB;

class AvailabilityController extends Controller
{
    
     protected $filePath;
    
    public function getFilePath() {
     
        return $filePath;
    }
    
    public function setFilePath(String  $value) {
     
        return $filePath = $value;
    }
    
    public function create(Request $request) 
    {
        $request->validate([
            'job_id' => 'required',
            'time_in' => 'required',
            'time_out' => 'required',
            'amount' => 'required',
        ]);

        Availability::create([
            'user_id' => auth()->user()->id, 
            'job_id' => $request->input('job_id'), 
            'time_in' => $request->input('time_in'), 
            'time_out' => $request->input('time_out'), 
            'amount' => $request->input('amount'), 
            'file_path' => getFilePath(),
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
            'amount' => 'required',
        ]);

        $availability = Availability::find($request->input('availability_code'));

        $availability->job_id = $request->input('job_id');
        $availability->time_in = $request->input('time_in');
        $availability->time_out = $request->input('time_out');
         $availability->time_out = $request->input('amount');

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
                    "availabilities.file_path, users.id, users.first_name, users.last_name, availabilities.time_in, availabilities.time_out, availabilities.amount, jobs_parent.title as profession, jobs.title as specialty"
                )
            )
            ->join('users', 'users.id', '=','availabilities.user_id')
            ->join('jobs', 'jobs.id', '=','availabilities.job_id')
            ->join('jobs as jobs_parent', 'jobs.parent_id', '=','jobs_parent.id');
        
        if (auth()->check()) {
            $users->where('availabilities.user_id', '!=', auth()->user()->id);
        }

        if ($request->has('userName') && $request->filled('userName')) {
            $users->where(function ($query) use ($request) {
                $query->where('users.first_name', 'like', '%'. $request->get('userName') . '%');
                $query->OrWhere('users.last_name', 'like', '%'. $request->get('userName') . '%');
            });
        }

        if ($request->has('job') && $request->filled('job')) {
            $users->where('jobs.parent_id', '=', $request->get('job'));
        }

        if ($request->has('jobType') && $request->filled('jobType')) {
            $users->where('availabilities.job_id', '=', $request->get('jobType'));
        }

        return response([
            'results' => $users->get()->all()
        ], 200); 
    }

    public function myJobs(Request $request) 
    {
        $users = DB::table('availabilities')
            ->select(
                DB::raw(
                    "users.first_name, users.last_name, availabilities.time_in, availabilities.time_out, availabilities.amount, jobs_parent.title as profession, jobs.title as specialty"
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
    
    
    
    public function addImage(){
        return view('add_image');
    }
    //Store image
    public function storeImage(Request $request){

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            setFilePath($file);
        } else {
            $filename= date('YmdHi').$request->input('fileName');
            $file-> move(public_path('public/Image'), $filename);
             setFilePath($file);
        }

         return response([
            'message' => 'availability uploaded file',
        ], 200);
        
    }
		//View image
    public function viewImage(){
        return view('view_image');
    }
    
    
    
    
    
    
}
