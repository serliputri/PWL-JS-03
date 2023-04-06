<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\IPKSemester;

class IPKSemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('i_p_k_semesters')->insert([
            [
                'id' => '1',
                'MataKuliah' => 'Praktikum Dasar Pemrograman',
                'SKS' => '2',
                'Jam' => '6',
                'Nilai' => 'A',
            ],
            [
                'id' => '2',
                'MataKuliah' => 'Dasar Pemrograman',
                'SKS' => '2',
                'Jam' => '6',
                'Nilai' => 'A',
            ],
            [
                'id' => '3',
                'MataKuliah' => 'Bahasa Inggris',
                'SKS' => '2',
                'Jam' => '4',
                'Nilai' => 'B',
            ],
            [
                'id' => '4',
                'MataKuliah' => 'Algoritma dan Struktur Data',
                'SKS' => '2',
                'Jam' => '4',
                'Nilai' => 'A',
            ]
            ]);
    }
}
