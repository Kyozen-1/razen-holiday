<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('sub_judul')->nullable();
            $table->string('judul')->nullable();
            $table->longText('deskripsi')->nullable();
            $table->string('gambar_background')->nullable();
            $table->string('gambar')->nullable();
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
        Schema::dropIfExists('section_testimonials');
    }
}
