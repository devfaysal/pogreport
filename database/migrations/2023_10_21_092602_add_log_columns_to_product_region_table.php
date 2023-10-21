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
        Schema::table('product_region', function (Blueprint $table) {
            $table->json('budget_log')->nullable();
            $table->json('placement_log')->nullable();
            $table->json('pog_log')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_region', function (Blueprint $table) {
            $table->dropColumn('budget_log');
            $table->dropColumn('placement_log');
            $table->dropColumn('pog_log');
        });
    }
};
