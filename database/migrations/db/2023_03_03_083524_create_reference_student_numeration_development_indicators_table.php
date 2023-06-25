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
        Schema::create('reference_student_numeration_development_indicators', function (Blueprint $table) {
                    $table->bigIncrements('id');
                    $table->integer('reference_student_numeration_development_scope_id');
                    $table->string('achievement');
                    $table->string('code');
                    $table->string('start_age_group');
                    $table->string('end_age_group');
                    $table->string('created_by')->nullable();
                    $table->string('modified_by')->nullable();
                    $table->softDeletes();
                    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reference_student_numeration_development_indicators');
    }
};
