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
        Schema::create('atletas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->date('data_nasc');
            $table->string('escalao');
            $table->enum('genero', ['M', 'F']);
            $table->bigInteger('cc')->unique();
            $table->bigInteger('nif')->unique();
            $table->bigInteger('telemovel');
            $table->string('nacionalidade');
            $table->string('tshirt');
            $table->boolean('federado')->default(true);
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atletas');
    }
};