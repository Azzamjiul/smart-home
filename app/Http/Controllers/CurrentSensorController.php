<?php

namespace App\Http\Controllers;

use App\Models\SensorData;
use Illuminate\Http\Request;

class CurrentSensorController extends Controller
{
    public function index()
    {
        $sensordata = new SensorData();
        $cursen_data = $sensordata->findCurSen()->get();
        return view('current_sensor_data')->with('cursen_data', $cursen_data);;
    }
}
