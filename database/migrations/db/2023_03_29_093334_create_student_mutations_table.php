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
        Schema::create('student_mutations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('service_number');
            $table->integer('reference_student_mutation_type_id');
            $table->string('name');
            $table->string('id_number');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->string('gender');
            $table->integer('reference_religion_id');
            $table->string('school_origin');
            $table->string('school_target');
            $table->string('file_transfer_letter');
            $table->string('file_report');
            $table->string('file_application');
            $table->integer('reference_work_unit_id');
            $table->boolean('is_principal_approve');
            $table->string('principal_note');
            $table->boolean('is_head_section_approve');
            $table->string('head_section_note');
            $table->boolean('is_head_office_approve');
            $table->string('head_office_note');
            $table->boolean('is_finish');
            $table->boolean('is_rejected');
            $table->string('rejected_reason');
            $table->string('file_result');
            $table->uuid('user_id');
            $table->string('created_by')->nullable();
            $table->string('modified_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE student_mutations ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_mutations');
    }
};
