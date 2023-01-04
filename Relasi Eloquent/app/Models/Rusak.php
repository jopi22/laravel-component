<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rusak extends Model
{
    use HasFactory;
    protected $fillable = ['rusak','motor_id'];

    public function motors(){
        return $this->belongsTo(Motor::class, 'motor_id');
    }

}
