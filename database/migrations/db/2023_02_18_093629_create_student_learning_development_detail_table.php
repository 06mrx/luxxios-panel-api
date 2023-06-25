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
      DB::statement('CREATE EXTENSION IF NOT EXISTS "uuid-ossp";');
      Schema::create('student_learning_development_details', function (Blueprint $table) {
        $table->uuid('id')->primary();
        $table->uuid('student_learning_development_id');
        $table->foreign('student_learning_development_id')->references('id')->on('student_learning_developments');
        $table->integer('reference_student_assesment_indicator_id');
        $table->foreign('reference_student_assesment_indicator_id')->references('id')->on('reference_student_assesment_indicators');
        $table->integer('reference_student_learning_result_type_id');
        $table->foreign('reference_student_learning_result_type_id')->references('id')->on('reference_student_learning_result_types');
        $table->string('created_by')->nullable();
        $table->string('modified_by')->nullable();
        $table->softDeletes();
        $table->timestamps();
      });
      DB::statement('ALTER TABLE student_learning_development_details ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_learning_development_detail');
    }
};
