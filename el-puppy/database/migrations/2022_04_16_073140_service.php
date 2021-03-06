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
        Schema::create('Service', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('nama');
            $table->string('alamat');
            $table->string('nomorTelepon');
            $table->string('jenisPerawatan');
            $table->integer('jamService');
            $table->string('Catatan');
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
        //
    }
};
