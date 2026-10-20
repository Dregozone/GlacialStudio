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
        Schema::create('daily_visit_totals', function (Blueprint $table) {
            $table->id();
            $table->date('date')->unique();
            $table->unsignedInteger('human_visits');
            $table->unsignedInteger('unique_visitors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_visit_totals');
    }
};
