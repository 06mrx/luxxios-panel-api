<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('decree_numbers', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('type');
          $table->uuid('legalize_id')->nullable();
          $table->uuid('cultural_heritage_id')->nullable();
          $table->uuid('diploma_replacement_id')->nullable();
          $table->uuid('internship_recommendation_id')->nullable();
          $table->uuid('student_mutation_id')->nullable();
          $table->uuid('studio_id')->nullable();
          $table->string('month');
          $table->integer('year');
          $table->string('assesed_by');
          $table->string('created_by')->nullable();
          $table->string('modified_by')->nullable();
          $table->softDeletes();
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
        Schema::dropIfExists('decree_numbers');
    }
};
