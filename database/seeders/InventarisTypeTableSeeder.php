<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InventarisTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventaris_types')->insert([
            'jenis_barang'     => "Elektronik",
            'deskripsi_barang' => "ini elektronik"
        ]);
    }
}
