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
        Schema::create('reference_boy_height_standarts', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('age');
          $table->string('minus_3_sd');
          $table->string('minus_2_sd');
          $table->string('minus_1_sd');
          $table->string('median');
          $table->string('plus_1_sd');
          $table->string('plus_2_sd');
          $table->string('plus_3_sd');
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
        Schema::dropIfExists('reference_boy_height_standarts');
    }
};
