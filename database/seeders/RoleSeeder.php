<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->insert([
                [
                    'id' => 'cdfd72c4-b80b-4658-b255-af519dde1fb2',
                    'code' => '1',
                    'name' => 'Administrator',
                ],
                [
                    'id' => '397d5ca4-c888-4114-b8fe-3ebe4098898d',
                    'code' => '2',
                    'name' => 'Guru',
                ],
                [
                    'id' => 'eba37e02-67e2-4729-84f4-1c15e045508e',
                    'code' => '3',
                    'name' => 'Kepala Sekolah',
                ],
                [
                    'id' => 'e49fae29-ba2c-4e56-87b5-fd10f147e0f4',
                    'code' => '4',
                    'name' => 'Tenaga Kesehatan',
                ],
                [
                    'id' => '3dc0b2b6-e421-4364-9699-8e5227b3837f',
                    'code' => '5',
                    'name' => 'Dinas Pendidikan',
                ],
                [
                    'id' => '407e4e7a-6915-4d72-b3ef-6ae4efa99a64',
                    'code' => '6',
                    'name' => 'Bunda Paud',
                ],
                [
                    'id' => '8dd82579-43ef-4525-89b7-b8f43522f2dc',
                    'code' => '7',
                    'name' => 'Operator Sekolah',
                ],
                [
                    'id' => 'a3269024-aa32-488b-949f-908e1fdeb047',
                    'code' => '8',
                    'name' => 'Publik',
                ]
            ]);
          }
      }
