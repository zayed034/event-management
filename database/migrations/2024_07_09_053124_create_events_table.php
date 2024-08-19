<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('day'); // Ensure this matches your database column
            $table->string('image')->nullable();
            $table->string('title');
            $table->string('sub_title');
            $table->text('description');
            $table->string('s_name');
            $table->string('seat');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}
