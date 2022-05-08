<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    
     public function updateStatus(Request $request) 
    {
        $booking = User::find($request->get('id'));
        $booking->access_level = $request->get('status');

        $booking->save();
         if ($request->get('status') === '0') {
                  return response([
                    'message' => 'User is set to Inactive.'
                ], 200);
         } else {
             return response([
                    'message' => 'User is set to Active.'
                ], 200);
         }
        
    }
    
     public function updateValidity(Request $request) 
    {
        $booking = User::find($request->get('id'));
        $booking-> isValidated = $request->get('status');

        $booking->save();
        return response([
            'message' => "Profile updated successfully"
        ]);
        
    }
    
    
    public function update(Request $request) 
    {
        $fields = $request->validate([
            'first_name' => "required",
            'last_name' => "required",
            'cellphone_number' => "required",
            'house_info' => "required",
            'street_name' => "required",
            'barangay' => "required",
            'city' => "required",
            'zipcode' => "required"
        ]);

        $userInfo = User::findOrFail($request->get('id'));

        $userInfo->first_name = $fields['first_name'];
        $userInfo->last_name = $fields['last_name'];
        $userInfo->cellphone_number = $fields['cellphone_number'];
        $userInfo->house_info = $fields['house_info'];
        $userInfo->street_name = $fields['street_name'];
        $userInfo->barangay = $fields['barangay'];
        $userInfo->city = $fields['city'];
        $userInfo->zipcode = $fields['zipcode'];

        $userInfo->save();

        return response([
            'message' => "Profile updated successfully"
        ]);
    }
}
