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
        Schema::create('reference_positions', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->boolean('is_functional');
          $table->string('echelon')->nullable();
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
        Schema::dropIfExists('reference_positions');
    }
};
