<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris_type extends Model
{
    use HasFactory;

    protected $table = 'inventaris_types';
    protected $fillable = ["jenis_barang", "deskripsi_barang"];

    public function inventaris(){
        return $this -> hasMany(Inventaris::class);
    }
}
