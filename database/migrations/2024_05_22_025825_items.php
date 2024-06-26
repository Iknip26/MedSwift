<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('category');
            $table->text('description')->nullable();
            $table->enum('item_type', ["alkes", "obat"]);
            $table->decimal('price', 8, 2);
            $table->string('image_picture');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('items');
    }

};
