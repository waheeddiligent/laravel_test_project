<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;
use DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($co=0; $co < 500; $co++) { 
            DB::table('posts')->insert([
                'title' => Str::random(20),
                'description' => Str::random(500)
            ]);
        }
    }
}
