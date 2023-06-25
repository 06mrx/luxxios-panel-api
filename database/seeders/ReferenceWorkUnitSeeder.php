<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReferenceWorkUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('reference_work_units')->insert([
        [
            'name' => 'Dinas Pendidikan',
            'registration_number' => 0000000000,
            'address' => 'Jl. Blackwater',
            'province' => 'KALIMANTAN UTARA',
            'city' => 'KABUPATEN TANA TIDUNG',
            'district' => 'SESAYAP',
            'village' => 'SESAYAP',
            'zip_code' => 00000,
            'status' => 'AKTIF',
            'education_form' => 'KANTOR DINAS',
            'ministry' => 'KEMENDIKBUD',
            'tax_number' => 0000000000,
            'establishment_letter_number' => '00000000',
            'establishment_date' => '2023-02-18',
            'operational_letter_number' => '00000000000',
            'operational_letter_date' => '2023-02-18',
            'operational_letter_file' => 'file_sk_operasional',
            'accreditation' => 'A',
            'fax_number' => '00000000000',
            'phone_number' => '00000000000',
            'email' => 'dinas@sipaud.go.id',
            'website' => 'www.dinas.go.id',
        ],
        [
            'name' => 'PAUD Blackwater',
            'registration_number' => 0000000000,
            'address' => 'Jl. Blackwater',
            'province' => 'KALIMANTAN UTARA',
            'city' => 'KABUPATEN TANA TIDUNG',
            'district' => 'SESAYAP',
            'village' => 'SESAYAP',
            'zip_code' => 00000,
            'status' => 'AKTIF',
            'education_form' => 'PAUD',
            'ministry' => 'KEMENDIKBUD',
            'tax_number' => 0000000000,
            'establishment_letter_number' => '00000000',
            'establishment_date' => '2023-02-18',
            'operational_letter_number' => '00000000000',
            'operational_letter_date' => '2023-02-18',
            'operational_letter_file' => 'file_sk_operasional',
            'accreditation' => 'A',
            'fax_number' => '00000000000',
            'phone_number' => '00000000000',
            'email' => 'paud@sipaud.go.id',
            'website' => 'www.paud.go.id',
        ]
      ]);
    }
}
