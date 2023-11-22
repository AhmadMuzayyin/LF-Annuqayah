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
        Schema::create('quiz_grades', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\QuizResult::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\QuizQuesion::class)->constrained()->cascadeOnDelete();
            $table->integer('grade'); // nilai tiap soal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_grades');
    }
};
