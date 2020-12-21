<?php

namespace App\Http\Controllers;

use App\Models\SensorData;
use Illuminate\Http\Request;

class SensorDataController extends Controller
{
    public function getAll(){
        $data = SensorData::get()->toJson(JSON_PRETTY_PRINT);
        return response($data, 200);
    }

    public function get($id){
        if (SensorData::where('id', $id)->exists()) {
            $data = SensorData::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($data, 200);
        } else {
            return response()->json([
                "message" => "SensorData not found"
            ], 404);
        }
    }

    public function create(Request $request){
        $data = new SensorData;
        $data->sensor_name = $request->sensor_name;
        $data->value = $request->value;
        $data->save();

        return response()->json([
            "message" => "Book record created"
        ], 201);
    }

    public function update(Request $request, $id){
        if (SensorData::where('id', $id)->exists()) {
            $data = SensorData::find($id);
    
            $data->sensor_name = is_null($request->sensor_name) ? $request->sensor_name : $data->sensor_name;
            $data->value = is_null($request->value) ? $request->value : $data->value;
            $data->save();
    
            return response()->json([
              "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "SensorData not found"
            ], 404);
        }
    }

    public function delete($id){
        if(SensorData::where('id', $id)->exists()) {
            $data = SensorData::find($id);
            $data->delete();
    
            return response()->json([
              "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "SensorData not found"
            ], 404);
        }
    }

}
