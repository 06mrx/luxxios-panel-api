<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PersonalDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('personal_datas')->insert([
          [
              'name' => 'Leopold Strauss',
              'registration_number' => '1123456789',
              'id_number' => '1123456789',
              'educator_number' => '1123456789',
              'birth_place' => 'Malinau',
              'birth_date' => Carbon::now()->format('Y-m-d'),
              'gender' => 'Laki-laki',
              'reference_marital_status_id' => 1,
              'reference_religion_id' => 1,
              'reference_education_id' => 3,
              'address' => 'Jl. Terminal Baru (SLBN)',
              'province' => 'KALIMANTAN UTARA',
              'city' => 'KABUPATEN MALINAU',
              'district' => 'MALINAU KOTA',
              'village' => 'MALINAU KOTA',
              'zip_code' => '77554',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ]
      ]);
    }
}
