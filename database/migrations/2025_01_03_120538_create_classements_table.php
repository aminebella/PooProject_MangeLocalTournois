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
        Schema::create('classements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->constrained('teams')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('match_played')->default(0);
            $table->integer('win')->default(0);
            $table->integer('lose')->default(0);
            $table->integer('tied')->default(0);
            $table->integer('points')->default(0);
            $table->integer('goals')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classements');
    }
};
