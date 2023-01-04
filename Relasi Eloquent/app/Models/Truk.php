<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truk extends Model
{
    use HasFactory;
    protected $table = 'truk';
    protected $guarded = 'id';

    function pengeluaran(){
        return $this->hasMany(Pengeluaran::class);
    }
}
