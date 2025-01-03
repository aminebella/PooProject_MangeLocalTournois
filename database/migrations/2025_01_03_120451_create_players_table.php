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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->unsignedInteger('age');
            $table->unsignedInteger('number');
            $table->enum('position', ['Goalkeeper', 'Defender', 'Midfielder', 'Forward']);
            $table->string('nationality');
            $table->foreignId('team_id')->constrained('teams')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });


        // Ajouter une contrainte pour limiter l'âge à une plage
        Schema::getConnection()->statement('ALTER TABLE players ADD CONSTRAINT check_age CHECK (age BETWEEN 10 AND 50)');

        // Ajouter une contrainte pour limiter le nombre de tenues à une plage
        Schema::getConnection()->statement('ALTER TABLE players ADD CONSTRAINT check_number CHECK (number BETWEEN 1 AND 99)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
