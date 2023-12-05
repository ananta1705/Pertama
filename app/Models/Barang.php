<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'tbbarang';
    protected $primaryKey = 'idbarang';
    protected $guarded= [];

   public function tbtransaksis() {
        return $this->hasMany(Transaksi::class, 'idtransaksi');
    }
} 
