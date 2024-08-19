<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('m_image');
            $table->string('t_image');
            $table->string('title');
            $table->string('sub_title');
            $table->string('description');
            $table->string('list_text'); // Ensure this line is present
            $table->timestamps();
});
    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
}
