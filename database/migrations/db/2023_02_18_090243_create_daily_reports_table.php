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
        Schema::create('daily_reports', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->date('date');
            $table->text('activity');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('duration');
            $table->string('output_qty');
            $table->integer('reference_output_unit_id')->nullable();
            $table->foreign('reference_output_unit_id')->references('id')->on('reference_output_units');
            $table->string('file');
            $table->string('is_approve');
            $table->string('is_rejected');
            $table->string('reject_reason');
            $table->string('created_by')->nullable();
            $table->string('modified_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE daily_reports ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daily_reports');
    }
};
