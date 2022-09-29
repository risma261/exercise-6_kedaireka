<?php

use App\Models\Inventaris_type;
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
    public function index()
    {
        $inventaris_types = Inventaris_type::get();

        return view('inventaristype.index', compact('inventaris_types'));
    }

    public function up()
    {
        Schema::create('inventaris_types', function (Blueprint $table) {
            $table->id();
            $table->string("jenis_barang");
            $table->text("deskripsi_barang")->nullable();
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
        Schema::dropIfExists('inventaris_types');
    }
};
