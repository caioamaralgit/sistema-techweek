<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('locals_id');
            $table->unsignedInteger('events_id');
            $table->string('title', 150);
            $table->string('description', 4000);
            $table->timestamp('start');
            $table->timestamp('end');
            $table->string('cover', 68);
            $table->integer('max_participants');
            $table->timestamps();
            $table->foreign('locals_id')->references('id')->on('locals');
            $table->foreign('events_id')->references('id')->on('events');
        });
    }

    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
