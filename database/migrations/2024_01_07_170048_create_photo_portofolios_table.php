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
        Schema::create('photo_portofolios', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('portofolio_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo_portofolios');
    }
};