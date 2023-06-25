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
      Schema::create('student_learning_developments', function (Blueprint $table) {
        $table->uuid('id')->primary();
        $table->integer('reference_student_learning_development_type_id');
        $table->foreign('reference_student_learning_development_type_id')->references('id')->on('reference_student_learning_development_types');
        $table->uuid('student_personal_data_id');
        $table->foreign('student_personal_data_id')->references('id')->on('student_personal_datas');
        $table->date('assesment_date');
        $table->string('created_by')->nullable();
        $table->string('modified_by')->nullable();
        $table->softDeletes();
        $table->timestamps();
      });
      DB::statement('ALTER TABLE student_learning_developments ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_learning_development');
    }
};
