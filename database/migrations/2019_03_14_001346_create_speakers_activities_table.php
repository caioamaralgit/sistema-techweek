<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeakersActivitiesTable extends Migration
{
    public function up()
    {
        Schema::create('speakers_activities', function (Blueprint $table) {
            $table->unsignedInteger('speakers_id');
            $table->unsignedInteger('activities_id');
            $table->foreign('speakers_id')->references('id')->on('speakers');
            $table->foreign('activities_id')->references('id')->on('activities');
        });
    }

    public function down()
    {
        Schema::dropIfExists('speakers_activities');
    }
}
