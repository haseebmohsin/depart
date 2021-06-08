<?php

namespace App\Http\Controllers;

use App\Models\DriverConductor;
use App\Models\Traveler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function login(Request $request)
    {
        $user = DriverConductor::where('user_name', $request->user_name)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'The provided credentials are incorrect.',
            ], 201);
        }

        $token = $user->createToken($request->user_name)->plainTextToken;

        return response()->json([
            'token' => $token,
            'message' => 'logged in',
        ], 201);
    }

    function verifySecret(Request $request)
    {
        $traveler = Traveler::where('secret', $request->secret)->get();

        if (!$traveler) {
            return response()->json([
                'message' => 'No Traveler with this id found',
            ], 201);
        }elseif($traveler->count() > 1){
            return response()->json([
                'travelersCount' => $traveler->count(),
                'message' => 'More than one traveler exists with this same Id',
            ], 201);
        }elseif($traveler->count() > 0){
            return response()->json([
                'travelersCount' => $traveler->count(),
                'message' => 'The card is genuine.',
            ], 201);
        }
        
        return response()->json([
            'message' => 'Something went wrong while verifying...',
        ], 201);

    }
}
