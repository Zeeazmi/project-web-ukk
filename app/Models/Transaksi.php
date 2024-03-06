<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function barang_name()
    {
        return $this->belongsTo(Barang::class, 'barang', 'id');
    }
    public function costumer_name()
    {
        return $this->belongsTo(Costumer::class, 'costumer', 'id');
    }
}
