<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['title' => 'Assalaam Juara', 'content' => 'Assalaam Studio'],
            ['title' => 'Assalaam Berkuban', 'content' => 'Assalaam Studio'],
            ['title' => 'Assalaam Bersholawat', 'content' => 'Assalaam Studio'],
        ];

        DB::table('post')->insert($sample);

    }
}