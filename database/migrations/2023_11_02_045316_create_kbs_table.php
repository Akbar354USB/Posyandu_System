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
        Schema::create('kbs', function (Blueprint $table) {
            $table->id();
            $table->string('name_husband');
            $table->string('name_wife');
            $table->string('adress');
            $table->string('contraception');
            $table->string('installed');
            $table->string('uninstal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kbs');
    }
};
