<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class NilaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['nis' => '0123', 'kode_mata_pelajaran' => 'A01', 'nilai' => '90', 'grade' => ' '],
            ['nis' => '0124', 'kode_mata_pelajaran' => 'A02', 'nilai' => '60', 'grade' => ' '],
            ['nis' => '0125', 'kode_mata_pelajaran' => 'A03', 'nilai' => '61', 'grade' => ' '],
        ];

        DB::table('nilais')->insert($sample);

    }
}