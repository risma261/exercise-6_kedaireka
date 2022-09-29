<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;

    protected $table = 'inventaris';
    protected $fillable = ["kode_barang", "harga", "merk_barang", "jumlah", "inventaris_type_id"];
    public function Inventaris_type()
    {
        return $this->belongsTo(Inventaris_type::class);
    }
}

