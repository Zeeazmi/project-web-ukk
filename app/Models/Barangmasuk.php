<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barangmasuk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function barang_name()
    {
        return $this->belongsTo(Barang::class, 'barang', 'id');
    }

}
