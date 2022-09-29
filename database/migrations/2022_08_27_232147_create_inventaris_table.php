<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_barang');
            $table->string('jenis_barang');
            $table->string('merk_barang');
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventaris');
    }

    //  Schema::table('inventaris', function (Blueprint $table){
    //     $table->dropForeign("inventaris_inventaris_types_id_foreign");
    //     $table->dropColumn("inventaris_types_id");
};
