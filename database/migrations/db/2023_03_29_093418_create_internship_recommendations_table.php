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
        Schema::create('internship_recommendations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('service_number');
            $table->string('file_application');
            $table->string('applican_institution');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('pic_name');
            $table->string('pic_phone_number');
            $table->string('pic_position');
            $table->integer('reference_work_unit_id');
            $table->boolean('is_locked');
            $table->boolean('is_institution_head_approve');
            $table->string('institution_head_note');
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
        DB::statement('ALTER TABLE internship_recommendations ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('internship_recommendations');
    }
};
