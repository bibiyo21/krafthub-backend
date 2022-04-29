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
            "id" => 10,
            'title' => "Bathroom Faucets",
            'description' => "Service for Bathroom Faucets",
            'parent_id' => 2
        ]);

        DB::table('jobs')->insert([
                    "id" => 11,
                    'title' => "Ablution Cleaning",
                    'description' => "Service for Ablution Cleaning",
                    'parent_id' => 3
                ]);

        DB::table('jobs')->insert([
                    "id" => 12,
                    'title' => "Domestic/Residential Electrician",
                    'description' => "Domestic/Residential Electrician",
                    'parent_id' => 4
                ]);
    }
}
