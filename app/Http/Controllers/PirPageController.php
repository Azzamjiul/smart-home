<?php

namespace App\Http\Controllers;

use App\Models\SensorData;
use Illuminate\Http\Request;

class PirPageController extends Controller
{
    public function index()
    {
        $sensordata = new SensorData();
        $pir_data = $sensordata->findPir()->get();
        return view('lamp_data')->with('pir_data', $pir_data);;
    }
}
