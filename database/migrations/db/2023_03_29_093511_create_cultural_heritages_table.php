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
        Schema::create('cultural_heritages', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('service_number');
            $table->string('name');
            $table->string('local_name');
            $table->string('address');
            $table->string('province');
            $table->string('city');
            $table->string('district');
            $table->string('village');
            $table->string('zip_code');
            $table->string('longitude');
            $table->string('latitude');
            $table->integer('reference_cultural_heritage_century_id');
            $table->text('past_function');
            $table->text('present_function');
            $table->boolean('is_state_property');
            $table->string('owner_name');
            $table->string('owner_phone');
            $table->string('owner_address');
            $table->boolean('is_site_manager');
            $table->string('site_manager_name');
            $table->string('site_manager_phone');
            $table->string('site_manager_address');
            $table->text('description');
            $table->text('history_background');
            $table->string('building_area');
            $table->string('land_area');
            $table->string('area');
            $table->string('cultural_heritage_form');
            $table->string('cultural_heritage_material')->nullable();
            $table->string('cultural_heritage_height')->nullable();
            $table->string('cultural_heritage_width')->nullable();
            $table->string('cultural_heritage_long')->nullable();
            $table->string('cultural_heritage_diameter')->nullable();
            $table->string('cultural_heritage_thick')->nullable();
            $table->boolean('is_finish');
            $table->string('file_result');
            $table->uuid('user_id');
            $table->string('created_by')->nullable();
            $table->string('modified_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE cultural_heritages ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cultural_heritages');
    }
};
