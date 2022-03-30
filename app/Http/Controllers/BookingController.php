<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function create(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'eta' => 'required',
            'maker_id'=> 'required'
        ]);

        if ($validator->fails()) {
            return response([
                'message' => $validator->errors()->messages()   
            ], 400);
        }


        Booking::create([
            'maker_id' => $request->get('maker_id'),
            'user_id' => auth()->user()->id,
            'eta' => Carbon::parse($request->get('eta'))->format('Y-m-d H:i:s'),
            'additional_info' => $request->get('additional_info'),
        ]);

        return response([
            'message' => 'Booking created successfully',
        ], 200);
    }
}
