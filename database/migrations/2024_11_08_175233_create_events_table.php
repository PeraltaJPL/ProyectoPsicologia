<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('eventId');
            $table->string('title', 100);
            $table->text('description')->nullable();
            $table->date('eventDate');
            $table->time('eventTime')->nullable();
            // $table->unsignedBigInteger('userId');
            // $table->foreign('userId')->references('userId')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
