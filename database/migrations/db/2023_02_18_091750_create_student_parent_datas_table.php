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
      Schema::create('student_parent_datas', function (Blueprint $table) {
        $table->uuid('id')->primary();
        $table->uuid('student_personal_data_id');
        $table->foreign('student_personal_data_id')->references('id')->on('student_personal_datas');
        $table->string('name');
        $table->string('id_number');
        $table->string('birth_place');
        $table->date('birth_date');
        $table->string('gender');
        $table->integer('reference_religion_id');
        $table->foreign('reference_religion_id')->references('id')->on('reference_religions');
        $table->integer('reference_education_id');
        $table->foreign('reference_education_id')->references('id')->on('reference_educations');
        $table->integer('reference_job_id');
        $table->foreign('reference_job_id')->references('id')->on('reference_jobs');
        $table->integer('reference_income_id');
        $table->foreign('reference_income_id')->references('id')->on('reference_incomes');
        $table->integer('reference_parent_type_id');
        $table->foreign('reference_parent_type_id')->references('id')->on('reference_parent_types');
        $table->string('address');
        $table->string('province');
        $table->string('city');
        $table->string('district');
        $table->string('village');
        $table->string('zip_code');
        $table->boolean('is_disabled');
        $table->string('created_by')->nullable();
        $table->string('modified_by')->nullable();
        $table->softDeletes();
        $table->timestamps();
      });
      DB::statement('ALTER TABLE student_parent_datas ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_parent_datas');
    }
};
