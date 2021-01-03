<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\SensorData;
use Carbon\Carbon;

class sensor_data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        for($i = 0; $i < 60; $i++)
        {
            $data = new SensorData();
            //$data->sensor_name = "PIR";
            $data->sensor_name = "Amperage";
            $data->value = rand(0, 10);
            $data->created_at = $now;
            $data->save();

            $data = new SensorData();
            $data->sensor_name = "PIR";
            // $data->sensor_name = "Amperage";
            $data->value = rand(0, 1);
            $data->created_at = $now;
            $data->save();

            $now->addMinute();
        }
        // $data = new SensorData();
        // $data->sensor_name = Str::random(10);
        // $data->value = 1.2;
        // $data->save();
        // $data = new SensorData();
        // $data->sensor_name = Str::random(10);
        // $data->value = 2.2;
        // $data->save();
        // $data = new SensorData();
        // $data->sensor_name = Str::random(10);
        // $data->value = 3.2;
        // $data->save();
        // $data = new SensorData();
        // $data->sensor_name = Str::random(10);
        // $data->value = 4.2;
        // $data->save();
        // $data = new SensorData();
        // $data->sensor_name = Str::random(10);
        // $data->value = 5.2;
        // $data->save();
    }
}
