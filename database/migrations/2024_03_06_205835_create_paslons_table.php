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
        Schema::create('paslon', function (Blueprint $table) {
            $table->id();
            $table->string('nourut');
            $table->string('nama_lengkap');
            $table->text('visi');
            $table->text('misi');
            $table->string('foto_paslon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paslon');
    }
};
