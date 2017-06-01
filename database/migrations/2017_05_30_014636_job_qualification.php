<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JobQualification extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('job_qualification', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('job_id')->unsigned();
          $table->foreign('job_id')->references('id')->on('jobs');
          $table->integer('qualification_id')->unsigned();
          $table->foreign('qualification_id')->references('id')->on('qualifications');
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
        Schema::dropIfExists('job_qualification');
    }
}
