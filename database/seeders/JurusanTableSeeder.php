<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class JurusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['kode_mata_pelajaran' => 'A01', 'nama_mata_pelajaran' => 'Matematika', 'semester' => 'Genap', 'jurusan' => 'RPL'],
            ['kode_mata_pelajaran' => 'A02', 'nama_mata_pelajaran' => 'Bahasa Indonesia', 'semester' => 'Genap', 'jurusan' => 'RPL'],
            ['kode_mata_pelajaran' => 'A03', 'nama_mata_pelajaran' => 'Bahasa Inggris', 'semester' => 'Genap', 'jurusan' => 'RPL'],
        ];

        DB::table('jurusans')->insert($sample);

    }
}