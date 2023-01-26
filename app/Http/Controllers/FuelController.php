<?php

namespace App\Http\Controllers;

use App\Models\Fuel;
use Illuminate\Http\Request;

class FuelController extends Controller
{
    function addReading(Request $request)
    {
        $bus_number = $request->bus_number;
        $out_reading = $request->out_reading;
        $in_reading = $request->in_reading;

        if($bus_number && $out_reading && $in_reading){
            $fuel = new Fuel();
            $fuel->bus_no = $bus_number;
            $fuel->out_reading = $out_reading;
            $fuel->in_reading = $in_reading;
            $fuel->save();

            return response()->json([
                'message' => 'Reading added successfully!',
            ], 201);
        }

        return response()->json([
            'message' => 'Something went Wrong!',
        ], 201);

    }
}
