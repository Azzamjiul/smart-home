<?php

namespace App\Http\Controllers;

use App\Models\SensorData;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(){
        // $pir_data = SensorData::where(['sensor_name'=>'PIR'])->latest()->first();
        // $data_time = Carbon::parse($pir_data->created_at);
        // $cur_time = Carbon::now();
        // $time_diff = $cur_time->diffInMinutes($data_time);
        // if($time_diff < 5) {        // record terakhir kurang dari 5 menit yg lalu
        //     $status = 1;            // lampu menyala
        // } else {
        //     $status = 0;            // lampu mati
        // }
        return view('dashboard');
    }
}
