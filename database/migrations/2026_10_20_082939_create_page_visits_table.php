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
        Schema::create('page_visits', function (Blueprint $table) {
            $table->id();
            $table->date('date')->index();
            $table->string('visitor_hash', 64);
            $table->string('path', 255);
            $table->timestamp('created_at')->nullable();

            $table->index(['date', 'visitor_hash']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_visits');
    }
};
