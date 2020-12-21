<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\SensorData;

class sensor_data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new SensorData();
        $data->sensor_name = Str::random(10);
        $data->value = 1.2;
        $data->save();
        $data = new SensorData();
        $data->sensor_name = Str::random(10);
        $data->value = 2.2;
        $data->save();
        $data = new SensorData();
        $data->sensor_name = Str::random(10);
        $data->value = 3.2;
        $data->save();
        $data = new SensorData();
        $data->sensor_name = Str::random(10);
        $data->value = 4.2;
        $data->save();
        $data = new SensorData();
        $data->sensor_name = Str::random(10);
        $data->value = 5.2;
        $data->save();
    }
}
