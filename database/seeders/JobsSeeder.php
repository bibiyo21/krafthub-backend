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
                                    "id" => 40,
                                     'title' => "Ablution Cleaning",
                                    'description' => "Service for Ablution Cleaning",
                                    'parent_id' => 3
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 41,
                                     'title' => "Carpet Cleaning",
                                    'description' => "Service for Carpet Cleaning",
                                    'parent_id' => 3
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 42,
                                     'title' => "Ceiling Cleaning",
                                    'description' => "Service for Ceiling Cleaning",
                                    'parent_id' => 3
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 43,
                                     'title' => "Curtain Cleaning",
                                    'description' => "Service for Curtain Cleaning",
                                    'parent_id' => 3
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 44,
                                     'title' => "Dry Carpet Cleaning",
                                    'description' => "Service for Dry Carpet Cleaning",
                                    'parent_id' => 3
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 45,
                                     'title' => "Food safety",
                                    'description' => "Service for Food safety",
                                    'parent_id' => 3
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 46,
                                     'title' => "General Cleaning",
                                    'description' => "Service for General Cleaning",
                                    'parent_id' => 3
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 47,
                                     'title' => "Mattress Cleaning",
                                    'description' => "Service for Mattress Cleaning",
                                    'parent_id' => 3
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 48,
                                     'title' => "Grease Trap Cleaning",
                                    'description' => "Service for Grease Trap Cleaning",
                                    'parent_id' => 3
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 49,
                                     'title' => "Canopy Cleaning",
                                    'description' => "Service for Canopy Cleaning",
                                    'parent_id' => 3
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 50,
                                     'title' => "Window Cleaning",
                                    'description' => "Service for Window Cleaning",
                                    'parent_id' => 3
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 51,
                                     'title' => "Disinfecting Cleaning",
                                    'description' => "Service for Disinfecting Cleaning",
                                    'parent_id' => 3
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 52,
                                     'title' => "Upholstery Cleaning ",
                                    'description' => "Service for Upholstery Cleaning ",
                                    'parent_id' => 3
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 53,
                                     'title' => "Wet Carpet Cleaning",
                                    'description' => "Service for Wet Carpet Cleaning",
                                    'parent_id' => 3
                                ]);


                        DB::table('jobs')->insert([
                                    "id" => 53,
                                     'title' => "Domestic/Residential Electrician",
                                    'description' => "Service for Domestic/Residential Electrician",
                                    'parent_id' => 4
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 54,
                                     'title' => "Domestic/Residential Electrician",
                                    'description' => "Service for Domestic/Residential Electrician",
                                    'parent_id' => 4
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 55,
                                     'title' => "Commercial Electrician",
                                    'description' => "Service for Commercial Electrician",
                                    'parent_id' => 4
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 56,
                                     'title' => "Maintenance Electrician",
                                    'description' => "Service for Maintenance Electrician",
                                    'parent_id' => 4
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 57,
                                     'title' => "Electrical Machine Repairer and Rewinder",
                                    'description' => "Service for Electrical Machine Repairer and Rewinder",
                                    'parent_id' => 4
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 58,
                                     'title' => "Highway Systems Electrician",
                                    'description' => "Service for Highway Systems Electrician",
                                    'parent_id' => 4
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 59,
                                     'title' => "Electrical Instrumentation Technician",
                                    'description' => "Service for Electrical Instrumentation Technician",
                                    'parent_id' => 4
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 60,
                                     'title' => "Industrial Electrician",
                                    'description' => "Service for Industrial Electrician",
                                    'parent_id' => 4
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 61,
                                     'title' => "Low Voltage Electrician",
                                    'description' => "Service for Low Voltage Electrician",
                                    'parent_id' => 4
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 62,
                                     'title' => "Automotive Electrician",
                                    'description' => "Service for Automotive Electrician",
                                    'parent_id' => 4
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 63,
                                     'title' => "Aviation Electrician",
                                    'description' => "Service for Aviation Electrician",
                                    'parent_id' => 4
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 64,
                                     'title' => "Marine Electrician",
                                    'description' => "Service for Marine Electrician",
                                    'parent_id' => 4
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 65,
                                     'title' => "Outside Lineman",
                                    'description' => "Service for Outside Lineman",
                                    'parent_id' => 4
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 66,
                                     'title' => "Powerhouse and Substation Technician",
                                    'description' => "Service for Powerhouse and Substation Technician",
                                    'parent_id' => 4
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 67,
                                     'title' => "Security and Fire Alarm Installer",
                                    'description' => "Service for Security and Fire Alarm Installer",
                                    'parent_id' => 4
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 68,
                                     'title' => "Wind Turbine Electrician",
                                    'description' => "Service for Wind Turbine Electrician",
                                    'parent_id' => 4
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 69,
                                     'title' => "Electrical InJector",
                                    'description' => "Service for Electrical InJector",
                                    'parent_id' => 4
                                ]);

    }
}
