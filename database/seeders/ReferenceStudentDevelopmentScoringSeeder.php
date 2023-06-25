<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReferenceStudentDevelopmentScoringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('reference_student_development_scorings')->insert([
           [
               'name' => 'BB (Belum Berkembang)',
               'point' => 1,
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'name' => 'MB (Mulai Berkembang)',
               'point' => 2,
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'name' => 'BSH (Berkembang Sesuai Harapan)',
               'point' => 3,
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'name' => 'BSB (Berkembang Sangat Baik)',
               'point' => 4,
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ]
       ]);
    }
}
