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
        Schema::create('diploma_replacement_score_evaluation_lists', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('diploma_replacement_id');
            $table->integer('reference_subject_id');
            $table->double('score_number');
            $table->string('score_letter');
            $table->string('created_by')->nullable();
            $table->string('modified_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE diploma_replacement_score_evaluation_lists ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diploma_replacement_score_evaluation_lists');
    }
};
