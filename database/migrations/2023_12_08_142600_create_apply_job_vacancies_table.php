<?php

use App\Enums\ApplicantStatusEnum;
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
        Schema::create('apply_job_vacancies', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('job_vacancy_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignUuid('student_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('cv')->nullable();
            $table->enum('status', [ApplicantStatusEnum::PENDING->value, ApplicantStatusEnum::ACCEPTED->value, ApplicantStatusEnum::REJECTED->value]);
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apply_job_vacancies');
    }
};
