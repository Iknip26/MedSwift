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
        Schema::create('drugs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id'); // Menggunakan unsignedBigInteger untuk foreign key
            $table->string('komposisi');
            $table->string('side_effect');
            $table->string('dosage');
            $table->string('using_guide');
            $table->timestamps();

            // Menambahkan foreign key constraint
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::table('drugs', function (Blueprint $table) {
            // Menghapus foreign key constraint terlebih dahulu
            $table->dropForeign(['item_id']);
        });
        Schema::dropIfExists('drugs');
    }
};