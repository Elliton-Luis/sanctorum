<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('saints', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('feast_day');
            $table->string('patronage');
            $table->string('biography');
            $table->string('img_url');
            $table->string('notes');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('saints');
    }
};
