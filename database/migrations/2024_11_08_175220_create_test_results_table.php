<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestResultsTable extends Migration
{
    public function up()
    {
        Schema::create('test_results', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name');
            $table->string('career');
            $table->date('date');
            $table->string('location');
            $table->integer('visual_score');
            $table->integer('auditory_score');
            $table->integer('kinesthetic_score');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('test_results');
    }

};
