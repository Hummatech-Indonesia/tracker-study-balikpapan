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
        Schema::create('submit_surveys', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('survey_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignUuid('student_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->char('graduation_year',4);
            $table->text('activity');
            $table->text('url_address');
            $table->char('phone_number',15);
            $table->string('email');
            $table->string('facebook');
            $table->boolean('alumni_gathering');
            $table->string('city');
            $table->boolean('statement');
            $table->text('current_activity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submit_surveys');
    }
};
