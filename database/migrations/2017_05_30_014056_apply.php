<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Apply extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('apply', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('job_id')->unsigned();
          $table->foreign('job_id')->references('id')->on('jobs');

          $table->integer('jobseeker_id')->unsigned();
          $table->foreign('jobseeker_id')->references('id')->on('jobseekers');
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apply');
    }
}
