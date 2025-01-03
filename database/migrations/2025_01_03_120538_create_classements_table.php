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
            $table->unsignedInteger('match_played')->default(0);
            $table->unsignedInteger('win')->default(0);
            $table->unsignedInteger('lose')->default(0);
            $table->unsignedInteger('tied')->default(0);
            $table->unsignedInteger('points')->default(0);
            $table->unsignedInteger('goals')->default(0);
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
