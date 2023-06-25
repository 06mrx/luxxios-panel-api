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
        Schema::create('diploma_replacements', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('service_number');
            $table->integer('reference_diploma_replacement_type_id');
            $table->string('name');
            $table->string('id_number');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->string('parent_name');
            $table->string('lost_letter_number');
            $table->string('lost_letter_issuer');
            $table->string('lost_letter_reason');
            $table->integer('reference_work_unit_id');
            $table->boolean('is_locked');
            $table->double('score_number');
            $table->string('score_letter');
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
        DB::statement('ALTER TABLE diploma_replacements ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diploma_replacements');
    }
};
