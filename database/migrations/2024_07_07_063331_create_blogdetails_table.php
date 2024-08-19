<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogdetailsTable extends Migration
{
    public function up()
    {
        Schema::create('blogdetails', function (Blueprint $table) {
            $table->id();
            $table->string('s_title');
            $table->string('title');           
            $table->string('image');
            $table->string('date_time');
            $table->string('category');
            $table->text('description');
            $table->string('d_title');
            $table->string('list');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogdetails');
    }
}
