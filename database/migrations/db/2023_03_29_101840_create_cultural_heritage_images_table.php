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
            Schema::create('cultural_heritage_images', function (Blueprint $table) {
                $table->uuid('id')->primary();
                $table->uuid('cultural_heritage_id');
                $table->string('file');
                $table->string('created_by')->nullable();
                $table->string('modified_by')->nullable();
                $table->softDeletes();
                $table->timestamps();
            });
            DB::statement('ALTER TABLE cultural_heritage_images ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cultural_heritage_images');
    }
};
