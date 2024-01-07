<?php

use App\Enums\GenderEnum;
use App\Enums\StatusEnum;
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
        Schema::create('students', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignUuid('classroom_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->char('national_student_id', 10);
            $table->date('birth_date');
            $table->enum('gender', [GenderEnum::MALE->value, GenderEnum::FEMALE->value]);
            $table->enum('status', [StatusEnum::ACTIVE->value, StatusEnum::NONACTIVE->value, StatusEnum::REJECT->value]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
