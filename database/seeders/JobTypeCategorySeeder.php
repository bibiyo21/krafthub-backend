<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobTypeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            "id" => 1,
            'title' => "Carpentry",
            'description' => "Service for Carpentry",
        ] );
        DB::table('jobs')->insert([
            "id" => 2,
            'title' => "Plumbing",
            'description' => "Service for Plumbing",
        ]);
        DB::table('jobs')->insert([
            "id" => 3,
            'title' => "Cleaning",
            'description' => "Service for Cleaning",
        ]);
        DB::table('jobs')->insert([
            "id" => 4,
            'title' => "Electrician",
            'description' => "Service for Electrician",
        ]);

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
