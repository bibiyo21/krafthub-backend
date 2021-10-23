<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            'title' => "Rough Carpenter",
            'description' => "Service for Rough Carpenter",
            'parent_id' => 1
        ]);
        DB::table('jobs')->insert([
            'title' => "Joister",
            'description' => "Service for Joister",
            'parent_id' => 1
        ]);
        DB::table('jobs')->insert([
            'title' => "Trim Carpenter",
            'description' => "Service for Trim Carpenter",
            'parent_id' => 1
        ]);
        DB::table('jobs')->insert([
            'title' => "Cabinet maker",
            'description' => "Service for Cabinet maker",
            'parent_id' => 1
        ]);
        DB::table('jobs')->insert([
            'title' => "Framer",
            'description' => "Service for Framer",
            'parent_id' => 1
        ]);
    }
}
