<?php

use App\Enums\WorkSystemEnum;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_vacancies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('job_title');
            $table->string('basic_salary');
            $table->enum('work_system', [WorkSystemEnum::CONTRACT->value, WorkSystemEnum::PERMANENTWORK->value, WorkSystemEnum::WORKINGPARTTIME->value, WorkSystemEnum::FREELANCE->value]);
            $table->text('description_working_system');
            $table->text('qualifications');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_vacancies');
    }
};
