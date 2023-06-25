<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReferenceStudentNumerationDevelopmentIndicatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('reference_student_numeration_development_indicators')->insert([
           [
               'reference_student_numeration_development_scope_id' => 1,
               'achievement' => 'Memilah, Mengelompokkan, Membuat Pola, Memecahkan Masalah',
               'code' => 'A1',
               'start_age_group' => '60',
               'end_age_group' => '84',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_numeration_development_scope_id' => 1,
               'achievement' => 'Menyelesaikan persamaan sederhana penjumlahan dan pengurangan bilangan cacah sampai dengan 1.000',
               'code' => 'A2',
               'start_age_group' => '84',
               'end_age_group' => '96',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_numeration_development_scope_id' => 1,
               'achievement' => 'Membuat gambar, diagram terkait masalah sehari - hari',
               'code' => 'A3',
               'start_age_group' => '84',
               'end_age_group' => '96',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_numeration_development_scope_id' => 1,
               'achievement' => 'Mengenali, melanjutkan, dan membuat pola',
               'code' => 'A4',
               'start_age_group' => '84',
               'end_age_group' => '96',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_numeration_development_scope_id' => 2,
               'achievement' => 'Membandingkan, Urutan (Kesatu, kedua, dan ketiga), Membagi material diantara teman, Menghitung, Hubungan satu - satu',
               'code' => 'B1',
               'start_age_group' => '60',
               'end_age_group' => '84',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_numeration_development_scope_id' => 2,
               'achievement' => 'Memahami dan membandingkan bilangan bilangan cacah sampai dengan 1.000',
               'code' => 'B2',
               'start_age_group' => '84',
               'end_age_group' => '96',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_numeration_development_scope_id' => 2,
               'achievement' => 'Menghubungkan pemahamannya dalam berbagai penggunaan bilangan dalam kehidupan setiap hari/situasi nyata',
               'code' => 'B3',
               'start_age_group' => '84',
               'end_age_group' => '96',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_numeration_development_scope_id' => 2,
               'achievement' => 'Mengenal gagasan dan makna pecahan',
               'code' => 'B4',
               'start_age_group' => '84',
               'end_age_group' => '96',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_numeration_development_scope_id' => 3,
               'achievement' => 'Geometri lebih dari sekedar menamai bentukbentuk.geometri termasuk memahami hubungan spasial, posisi, benda 2 dimensi dan 3 dimensi',
               'code' => 'G1',
               'start_age_group' => '60',
               'end_age_group' => '84',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_numeration_development_scope_id' => 3,
               'achievement' => 'Mengenal dan mendeskripsikan ciri berbagai bentuk bangun datar dan bangun ruang',
               'code' => 'G2',
               'start_age_group' => '84',
               'end_age_group' => '96',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_numeration_development_scope_id' => 3,
               'achievement' => 'Menyusun bentuk (tangram) dengan menggunakan gabungan berbagai bentuk datar',
               'code' => 'G3',
               'start_age_group' => '84',
               'end_age_group' => '96',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_numeration_development_scope_id' => 4,
               'achievement' => 'Memahami atribut benda - benda, Membangun konsep pengukuran tidak baku, Aplikasi bilangan untuk mengukur, seriasi',
               'code' => 'P1',
               'start_age_group' => '60',
               'end_age_group' => '84',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_numeration_development_scope_id' => 4,
               'achievement' => 'Mengenali atribut atribut benda yang terukur seperti panjang, berat, luas, dan volume',
               'code' => 'P2',
               'start_age_group' => '84',
               'end_age_group' => '96',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_numeration_development_scope_id' => 4,
               'achievement' => 'Membandingkan dan mengurutkan panjang, berat, luas, dan volume menggunakan satuan tidak baku dan tidak baku.',
               'code' => 'P3',
               'start_age_group' => '84',
               'end_age_group' => '96',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_numeration_development_scope_id' => 5,
               'achievement' => 'Mengumpulkan informasi, Mengorganisasi informasi secara sederhana, Bertanya dan menjawab pertanyaan sehubungan dengan informasi yang dikumpulkan dengan organisasi',
               'code' => 'AD1',
               'start_age_group' => '60',
               'end_age_group' => '84',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_numeration_development_scope_id' => 5,
               'achievement' => 'Mengurutkan, menyortir (kategorisasi), membandingkan, dan menyajikan data dari banyak benda dengan menggunakan turus dan gambar',
               'code' => 'AD2',
               'start_age_group' => '84',
               'end_age_group' => '96',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
       ]);
    }
}
