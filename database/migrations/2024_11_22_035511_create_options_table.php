<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionsTable extends Migration
{
    public function up(): void
    {
        Schema::create('options', function (Blueprint $table) {
            $table->bigIncrements('optionId');
            $table->unsignedBigInteger('questionId'); // Relación con la tabla questions
            $table->integer('option_value'); // Valor de la opción (1 a 5)
            $table->timestamps();

            // Llave foránea
            $table->foreign('questionId')->references('questionId')->on('questions')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('options');
    }
}
