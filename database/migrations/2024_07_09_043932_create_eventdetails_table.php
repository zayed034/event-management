<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventdetailsTable extends Migration
{
    public function up()
    {
        Schema::create('eventdetails', function (Blueprint $table) {
            $table->id();
            $table->string('s_title');
            $table->string('title');
            $table->string('image');
            $table->string('e_date');
            $table->string('e_time');
            $table->string('location');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('eventdetails');
    }
}
