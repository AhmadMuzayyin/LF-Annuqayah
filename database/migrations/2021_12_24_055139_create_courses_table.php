<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_categori_id');
            $table->string('video_url')->nullable();
            $table->string('img')->nullable();
            $table->string('pemateri');
            $table->string('fasilitas');
            $table->text('sistematika');
            $table->string('jenis');
            $table->string('biaya')->nullable();
            $table->date('jadwal');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
