<?php

use App\Enums\UploadAlumniEnum;
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
        Schema::create('upload_alumnis', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->enum('categories' ,[UploadAlumniEnum::VIDEO->value ,UploadAlumniEnum::IMAGE->value]);
            $table->string('judul');
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upload_alumnis');
    }
};
