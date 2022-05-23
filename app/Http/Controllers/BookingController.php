<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            'amount' => $request->get('amount')
        ]);

        return response([
            'message' => 'Booking created successfully',
        ], 200);
    }

    public function patchBooking(Request $request) 
    {
        $booking = Booking::find($request->get('id'));
        $booking->status = $request->get('status');

        $booking->save();

        return response([
            'message' => 'Booking is set to '. $request->get('status'),
        ], 200);
    }
    
    public function patchBookingReason(Request $request) 
    {
        $booking = Booking::find($request->get('id'));
        $booking->reason = $request->get('reason');

        $booking->save();

        return response([
            'message' => 'Successfully posted.',
        ], 200);
    }

    
     public function patchBookingRate(Request $request) 
    {
        $booking = Booking::find($request->get('id'));
        $booking->rate = $booking->rate + $request->get('rate');

        $booking->save();

        return response([
            'message' => 'Successfully posted.'
        ], 200);
    }
    

    public function scheduledBookings() 
    {
        $bookings = DB::table('bookings')
            ->select( 
                DB::raw(
                    "bookings.id as bookingId, users.id, users.first_name, users.last_name, bookings.eta, bookings.additional_info, bookings.status, bookings.amount, bookings.reason as cancellation_reason "
                )
            )
            ->where('bookings.user_id', '=',  auth()->user()->id)
            ->join('users', 'users.id', '=','bookings.maker_id');

        return response([
            'results' => $bookings->get()->all()
        ], 200); 
    }
    
    public function scheduledBookingsAdmin() 
    {
        $bookings = DB::table('bookings')
            ->select( 
                DB::raw(
                    "bookings.maker_id as makerId, bookings.id as bookingId, users.first_name, users.last_name, users.ratings, bookings.eta, bookings.additional_info, bookings.status, bookings.amount, bookings.amount_per_day,bookings.amount_per_hour,bookings.rate,bookings.reason"
                )
            )
            ->join('users', 'users.id', '=','bookings.maker_id');
       
        return response([
            'results' => $bookings->get()->all()
        ], 200); 
    }

    public function jobBookings() 
    {
        $bookings = DB::table('bookings')
            ->select( 
                DB::raw(
                    "bookings.id as bookingId, users.first_name, users.last_name, users.ratings, bookings.eta, bookings.additional_info, bookings.status,  bookings.amount, bookings.reason as cancellation_reason"
                )
            )
            ->where('bookings.maker_id', '=',  auth()->user()->id)
            ->join('users', 'users.id', '=','bookings.user_id');

        return response([
            'results' => $bookings->get()->all()
        ], 200); 
    }
}
