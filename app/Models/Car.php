<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function carBody()
    {
        return $this->belongsTo(CarBody::class, 'car_body_id');
    }

    public function carClass()
    {
        return $this->belongsTo(CarClass::class, 'car_class_id');
    }

    public function carEngine()
    {
        return $this->belongsTo(CarEngine::class, 'car_engine_id');
    }
}
