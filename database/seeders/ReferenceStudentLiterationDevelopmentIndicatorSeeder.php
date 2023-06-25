<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReferenceStudentLiterationDevelopmentIndicatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('reference_student_literation_development_indicators')->insert([
           [
               'reference_student_literation_development_scope_id' => 1,
               'achievement' => 'Memainkan kata/suara yang didengar dan diucapkan berulang-ulang',
               'code' => 'R1',
               'start_age_group' => '24',
               'end_age_group' => '36',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 1,
               'achievement' => 'Memahami cerita/dongeng sederhana',
               'code' => 'R2',
               'start_age_group' => '24',
               'end_age_group' => '36',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 1,
               'achievement' => 'Membedakan gambar/objek yang dibacakan',
               'code' => 'R3',
               'start_age_group' => '24',
               'end_age_group' => '36',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 1,
               'achievement' => 'Pura-pura membaca cerita bergambar dalam buku dengan kata-kata sendiri',
               'code' => 'R4',
               'start_age_group' => '36',
               'end_age_group' => '48',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 1,
               'achievement' => 'Mengulang cerita yang sudah dibacakan',
               'code' => 'R5',
               'start_age_group' => '36',
               'end_age_group' => '48',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 1,
               'achievement' => 'Mulai memahami perintah secara bersamaan',
               'code' => 'R6',
               'start_age_group' => '36',
               'end_age_group' => '48',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 1,
               'achievement' => 'Menyimak perkataan orang lain',
               'code' => 'R7',
               'start_age_group' => '48',
               'end_age_group' => '60',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 1,
               'achievement' => 'Memahami cerita yang dibacakan',
               'code' => 'R8',
               'start_age_group' => '48',
               'end_age_group' => '60',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 1,
               'achievement' => 'Mengulang kalimat yang lebih kompleks',
               'code' => 'R9',
               'start_age_group' => '60',
               'end_age_group' => '72',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 1,
               'achievement' => 'Senang dan menghargai bacaan',
               'code' => 'R10',
               'start_age_group' => '60',
               'end_age_group' => '72',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 2,
               'achievement' => 'Menggunakan kata tanya dengan tepat',
               'code' => 'E1',
               'start_age_group' => '24',
               'end_age_group' => '36',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 2,
               'achievement' => 'Menjawab pertanyaan yang ditanyakan dari jalan cerita yang diceritakan',
               'code' => 'E2',
               'start_age_group' => '24',
               'end_age_group' => '36',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 2,
               'achievement' => 'Mulai menyatakan kegiatan dengan mengucapkan kalimat sederhana',
               'code' => 'E3',
               'start_age_group' => '36',
               'end_age_group' => '48',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 2,
               'achievement' => 'Mulai bercerita secara bergantian dengan orang dewasa',
               'code' => 'E4',
               'start_age_group' => '36',
               'end_age_group' => '48',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 2,
               'achievement' => 'Menyebutkan kata-kata yang dikenal',
               'code' => 'E5',
               'start_age_group' => '48',
               'end_age_group' => '60',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 2,
               'achievement' => 'Menceritakan kembali cerita/dongeng yang pernah didengar',
               'code' => 'E6',
               'start_age_group' => '48',
               'end_age_group' => '60',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 2,
               'achievement' => 'Menyebutkan kelompok gambar yang memiliki bunyi yang sama',
               'code' => 'E7',
               'start_age_group' => '60',
               'end_age_group' => '72',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 2,
               'achievement' => 'Menyusun kalimat sederhana dalam struktur lengkap',
               'code' => 'E8',
               'start_age_group' => '60',
               'end_age_group' => '72',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 2,
               'achievement' => 'Melanjutkan sebagian cerita/dongeng yang telah diperdengarkan',
               'code' => 'E9',
               'start_age_group' => '60',
               'end_age_group' => '72',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 2,
               'achievement' => 'Menunjukkan pemahaman konsep-konsep dalam buku cerita',
               'code' => 'E10',
               'start_age_group' => '60',
               'end_age_group' => '72',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 3,
               'achievement' => 'Mengenal simbol-simbol',
               'code' => 'K1',
               'start_age_group' => '48',
               'end_age_group' => '60',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 3,
               'achievement' => 'Menyebutkan symbol-simbol huruf yang dikenal',
               'code' => 'K2',
               'start_age_group' => '60',
               'end_age_group' => '72',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 3,
               'achievement' => 'Menyebutkan kelompook gambar yang memiliki bunyi/huruf awal yang sama',
               'code' => 'K3',
               'start_age_group' => '60',
               'end_age_group' => '72',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'reference_student_literation_development_scope_id' => 3,
               'achievement' => 'Memahami hubungan antara bunyi dan bentuk huruf',
               'code' => 'K4',
               'start_age_group' => '60',
               'end_age_group' => '72',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ]
       ]);
    }
}
