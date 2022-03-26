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
            'eta' => 'required'
        ]);

        if ($validator->fails()) {
            return response([
                'message' => $validator->errors()->messages()   
            ], 400);
        }

        dd(Carbon::parse('d-m-Y H:i:s', strtotime($request->get('eta'))));

        Booking::create([
            'maker_id' => $request->get('maker_id'),
            'user_id' => 1,
            'eta' => Carbon::create($request->get('eta')),
            'additional_info' => $request->get('additional_info'),
        ]);

        return response([
            'message' => 'Booking created successfully',
        ], 200);
    }
}