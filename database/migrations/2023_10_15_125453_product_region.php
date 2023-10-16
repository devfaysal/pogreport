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
        Schema::create('product_region', function (Blueprint $table) {
            $table->foreignId('product_id');
            $table->foreignId('region_id');
            $table->string('type')->nullable();
            $table->integer('budget')->nullable();
            $table->integer('placement')->nullable();
            $table->integer('pog')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_region');
    }
};
