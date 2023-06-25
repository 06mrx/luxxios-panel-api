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
      Schema::create('student_weight_developments', function (Blueprint $table) {
        $table->uuid('id')->primary();
        $table->uuid('student_personal_data_id');
        $table->foreign('student_personal_data_id')->references('id')->on('student_personal_datas');
        $table->string('wieght');
        $table->string('status');
        $table->date('collection_date');
        $table->text('note');
        $table->string('created_by')->nullable();
        $table->string('modified_by')->nullable();
        $table->softDeletes();
        $table->timestamps();
      });
      DB::statement('ALTER TABLE student_weight_developments ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_weight_development');
    }
};
