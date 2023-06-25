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
        Schema::create('reference_work_units', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('registration_number');
            $table->string('address');
            $table->string('province');
            $table->string('city');
            $table->string('district');
            $table->string('village');
            $table->string('zip_code');
            $table->string('status');
            $table->string('education_form');
            $table->string('ministry');
            $table->string('tax_number');
            $table->string('establishment_letter_number');
            $table->date('establishment_date');
            $table->string('operational_letter_number');
            $table->date('operational_letter_date');
            $table->string('operational_letter_file');
            $table->string('accreditation');
            $table->string('fax_number');
            $table->string('phone_number');
            $table->string('email');
            $table->string('website');
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
        Schema::dropIfExists('reference_work_units');
    }
};
