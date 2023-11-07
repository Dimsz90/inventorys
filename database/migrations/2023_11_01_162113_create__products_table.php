<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Part_number');
            $table->string('Description');
            $table->unsignedBigInteger('Category_id');
            $table->unsignedBigInteger('Brand_id');
            $table->unsignedBigInteger('Uom_id');
            $table->string('Type');
            $table->string('price');
            $table->string('currency');
            $table->string('image')->nullable();
            $table->string('remarks')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
