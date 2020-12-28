<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorData extends Model
{
    use HasFactory;

    protected $table = 'sensor_data';
    public $timestamps = true;

    protected $fillable = [
        'sensor_name',
        'value',
        'created_at'
    ];
    
    public function findPir() {
        return $datas = SensorData::where(['sensor_name'=>'PIR']);
    }
    
    public function findCurSen() {
        return $datas = SensorData::where(['sensor_name'=>'Amperage']);
    }
}
