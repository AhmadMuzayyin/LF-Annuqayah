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
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\AuthorLibrary::class)->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('publisher');
            $table->text('description');
            $table->enum('type', ['Selebaran', 'Buletin', 'Buku']);
            $table->string('image');
            $table->year('published');
            $table->bigInteger('price')->nullable();
            $table->integer('stock')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};
