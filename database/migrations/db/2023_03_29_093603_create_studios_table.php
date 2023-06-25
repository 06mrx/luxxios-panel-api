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
        Schema::create('studios', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('service_number');
            $table->string('name');
            $table->string('chairman_name');
            $table->string('chairman_id_number');
            $table->string('chairman_phone_number');
            $table->string('chairman_address');
            $table->string('chairman_photo');
            $table->string('origin');
            $table->text('art_name_description');
            $table->string('phone_number');
            $table->string('email');
            $table->string('youtube_channel');
            $table->integer('male_artist');
            $table->integer('female_artist');
            $table->string('address');
            $table->string('province');
            $table->string('city');
            $table->string('district');
            $table->string('village');
            $table->string('zip_code');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('file_result');
            $table->uuid('user_id');
            $table->string('created_by')->nullable();
            $table->string('modified_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE studios ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studios');
    }
};
