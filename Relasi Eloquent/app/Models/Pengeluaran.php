<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Pengeluaran extends Model
{
    use HasFactory;
    protected $table = 'pengeluaran';
    protected $guarded = 'id';

    // function truk() {
    //     return $this->belongsTo(Truk::class); 
    // }
   public function barang() {
        return $this->belongsTo(Barang::class); 
    }
}
