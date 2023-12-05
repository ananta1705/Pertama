<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
        use HasFactory;
        protected $table = 'tbtransaksis';
        protected $primaryKey = 'idtransaksi';
        protected $guarded= [];

        public function tbbarang () {
            return $this->belongsTo(Barang::class, 'idbarang');
        }

        public function tbkasirs () {
            return $this->belongsTo(Kasir::class, 'idkasir');
        }
}
