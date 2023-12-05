<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Kasir extends Authenticatable
{
    use HasFactory;
    protected $table = 'tbkasirs';
    protected $primaryKey = 'idkasir';
    protected $guarded= [];

    public function tbkasirs() {
        return $this->hasMany(Transaksi::class, 'idtransaksi');
    }
}
