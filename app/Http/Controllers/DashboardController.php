<?php

namespace App\Http\Controllers;

use App\Models\SensorData;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $curtime = Carbon::now();
        $status = $this->lamstat();

        $lampdarr = $this->lampdata();

        $datas = array_keys(get_defined_vars());
        return view('dashboard', compact($datas));
    }

    public function lamstat()
    {
        $pir_data = SensorData::where(['sensor_name'=>'PIR'])->latest()->first();
        $data_time = Carbon::parse($pir_data->created_at);
        $cur_time = Carbon::now();
        $time_diff = $cur_time->diffInMinutes($data_time);
        if($time_diff < 5) {        // record terakhir kurang dari 5 menit yg lalu
            $status = 1;            // lampu menyala
        } else {
            $status = 0;            // lampu mati
        }
        // $datask = array_keys(get_defined_vars());
        // return view('surat.create-penelitian', compact($datask));
        // return view('dashboard')->with('status', $status);
        return $status;
    }

    public function lampdata()
    {
        $sensordata = new SensorData();
        $curhour = Carbon::now()->hour;
        $lampdata = $sensordata->findPir()->whereDate('created_at', Carbon::today())->get(['value', 'created_at']);

        $lampdarr = array();
        for($i=0; $i<60; $i++)
        {
            array_push($lampdarr, 0.0);
        }
        for($i=0; $i<count($lampdata); $i++)
        {
            if($lampdata[$i]->created_at->hour == $curhour)
            {
                $lampdarr[$lampdata[$i]->created_at->minute] = $lampdata[$i]->value;
            }
        }
        return $lampdarr;
    }
}
