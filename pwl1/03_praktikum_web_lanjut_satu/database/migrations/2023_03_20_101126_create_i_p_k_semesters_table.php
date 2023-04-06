<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('i_p_k_semesters', function (Blueprint $table) {
            $table->id();
            $table->string('MataKuliah',50);
            $table->integer('SKS');
            $table->integer('Jam');
            $table->string('Nilai',2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('i_p_k_semesters');
    }
};
