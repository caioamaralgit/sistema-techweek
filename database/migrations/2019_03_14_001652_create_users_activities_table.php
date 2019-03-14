<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersActivitiesTable extends Migration
{
    public function up()
    {
        Schema::create('users_activities', function (Blueprint $table) {
            $table->unsignedInteger('users_id');
            $table->unsignedInteger('activities_id');
            $table->string('hash', 1024);
            $table->boolean('present');
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('activities_id')->references('id')->on('activities');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users_activities');
    }
}
