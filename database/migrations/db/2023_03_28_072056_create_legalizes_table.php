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
        Schema::create('legalizes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('service_number');
            $table->integer('reference_diploma_type_id');
            $table->date('date');
            $table->string('file_diploma');
            $table->string('file_certificate');
            $table->string('file_transcript');
            $table->boolean('is_finish');
            $table->string('file_result');
            $table->boolean('is_feedback');
            $table->string('feedback');
            $table->uuid('user_id');
            $table->string('created_by')->nullable();
            $table->string('modified_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE legalizes ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('legalizes');
    }
};
