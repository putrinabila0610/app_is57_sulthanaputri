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
        Schema::create('updatedatabarangs', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->bigInteger('jeniss_id');
            $table->string('cabang');
            $table->string('jumlah');
            $table->string('harga');

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
        Schema::dropIfExists('updatedatabarangs');
    }
};
