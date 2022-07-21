<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['nis' => '0123', 'nama_siswa' => 'Virgi Septian', 'alamat_siswa' => 'Bandung', 'tanggal_lahir' => '2004-06-26'],
            ['nis' => '0124', 'nama_siswa' => 'Rohesa Shidiq', 'alamat_siswa' => 'Bandung', 'tanggal_lahir' => '2005-06-21'],
            ['nis' => '0125', 'nama_siswa' => 'Wildan Muhammad', 'alamat_siswa' => 'Bandung', 'tanggal_lahir' => '2005-06-16'],
        ];

        DB::table('siswas')->insert($sample);

    }
}
