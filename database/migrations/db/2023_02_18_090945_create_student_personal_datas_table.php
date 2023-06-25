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
      Schema::create('student_personal_datas', function (Blueprint $table) {
        $table->uuid('id')->primary();
        $table->string('family_card_number');
        $table->string('id_number');
        $table->string('name');
        $table->string('birth_certificate_registration_number');
        $table->string('birth_place');
        $table->date('birth_date');
        $table->string('gender');
        $table->integer('reference_religion_id');
        $table->foreign('reference_religion_id')->references('id')->on('reference_religions');
        $table->integer('reference_work_unit_id');
        $table->foreign('reference_work_unit_id')->references('id')->on('reference_work_units');
        $table->string('mother_name');
        $table->boolean('is_disabled');
        $table->string('address');
        $table->string('province');
        $table->string('city');
        $table->string('district');
        $table->string('village');
        $table->string('zip_code');
        $table->integer('reference_residence_type_id');
        $table->foreign('reference_residence_type_id')->references('id')->on('reference_residence_types');
        $table->integer('reference_transportation_type_id');
        $table->foreign('reference_transportation_type_id')->references('id')->on('reference_transportation_types');
        $table->string('child_number');
        $table->boolean('is_social_assistance_recipient');
        $table->boolean('is_indonesia_smart_card_recipient');
        $table->boolean('is_worth_receiving_indonesia_smart_program');
        $table->integer('reference_reason_receive_indonesia_smart_program_id');
        $table->foreign('reference_reason_receive_indonesia_smart_program_id')->references('id')->on('reference_reason_receive_indonesia_smart_programs');
        $table->string('created_by')->nullable();
        $table->string('modified_by')->nullable();
        $table->softDeletes();
        $table->timestamps();
      });
      DB::statement('ALTER TABLE student_personal_datas ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_personal_datas');
    }
};
