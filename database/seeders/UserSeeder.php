<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('users')->insert([
          [
              'registration_number' => '1123456789',
              'email' => 'leopold@sidik.go.id',
              'password' => Hash::make('namamuji'),
              'personal_data_id' => 'b14b52bd-88bf-4852-990e-9d7cfd5a0985',
              'role_id' => 'a3269024-aa32-488b-949f-908e1fdeb047',
              'reference_work_unit_id' => 1,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ],
      ]);
    }
}
