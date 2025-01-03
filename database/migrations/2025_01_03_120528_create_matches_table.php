<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team1_id')->constrained('teams')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('team2_id')->constrained('teams')->onDelete('cascade')->onUpdate('cascade');
            $table->datetime('kickoff_time')->unique();
            $table->enum('status', ['schedule', 'finished'])->default('schedule');
            $table->integer('score_team1')->nullable();
            $table->integer('score_team2')->nullable();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
