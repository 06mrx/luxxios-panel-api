<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReferencePositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('reference_positions')->insert([
        [
            'name' => 'Staff',
            'is_functional' => FALSE,
            'echelon' => 'Non-Eselon',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'Kepala Cabang',
            'is_functional' => FALSE,
            'echelon' => 'Eselon 3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'Kepala Bidang',
            'is_functional' => FALSE,
            'echelon' => 'Eselon 3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'Kepala Dinas',
            'is_functional' => FALSE,
            'echelon' => 'Eselon 2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'Honorer',
            'is_functional' => TRUE,
            'echelon' => 'Non Eselon',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'Ahli Pertama',
            'is_functional' => TRUE,
            'echelon' => 'Jabatan Fungsional',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'Ahli Muda',
            'is_functional' => TRUE,
            'echelon' => 'Jabatan Fungsional',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'Ahli Madya',
            'is_functional' => TRUE,
            'echelon' => 'Jabatan Fungsional',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'Ahli Utama',
            'is_functional' => TRUE,
            'echelon' => 'Jabatan Fungsional',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'Kepala Sekolah',
            'is_functional' => TRUE,
            'echelon' => 'Jabatan Fungsional',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'Pengawas',
            'is_functional' => TRUE,
            'echelon' => 'Jabatan Fungsional',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'Eksekutif',
            'is_functional' => FALSE,
            'echelon' => 'Jabatan Tinggi',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]
    ]);
    }
}
