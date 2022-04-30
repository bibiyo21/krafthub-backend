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
                                    "id" => 13,
                                     'title' => "Clogged Drains",
                                    'description' => "Service for Clogged Drains",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 14,
                                     'title' => "Construction Plumbing",
                                    'description' => "Service for Construction Plumbing",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 15,
                                     'title' => "Drain Cleaning",
                                    'description' => "Service for Drain Cleaning",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 16,
                                     'title' => "Emegency Plumber",
                                    'description' => "Service for Emegency Plumber",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 17,
                                     'title' => "Garbage Disposal",
                                    'description' => "Service for Garbage Disposal",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 18,
                                     'title' => "Gas lines & Gas Leaks",
                                    'description' => "Service for Gas lines & Gas Leaks",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 19,
                                     'title' => "Hydro Jetting",
                                    'description' => "Service for Hydro Jetting",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 20,
                                     'title' => "Kitchen Faucets",
                                    'description' => "Service for Kitchen Faucets",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 21,
                                     'title' => "Leak Detection",
                                    'description' => "Service for Leak Detection",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 22,
                                     'title' => "Leaking Pipes",
                                    'description' => "Service for Leaking Pipes",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 23,
                                     'title' => "Piping & Repiping",
                                    'description' => "Service for Piping & Repiping",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 24,
                                     'title' => "Plumber Diagnostices & Inspections",
                                    'description' => "Service for Plumber Diagnostices & Inspections",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 25,
                                     'title' => "Plumbing Repairs",
                                    'description' => "Service for Plumbing Repairs",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 26,
                                     'title' => "Plumbing Replacements & Installations",
                                    'description' => "Service for Plumbing Replacements & Installations",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 27,
                                     'title' => "Plumber Systems Maintenance",
                                    'description' => "Service for Plumber Systems Maintenance",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 28,
                                     'title' => "Plumbing Video Camera Inspection",
                                    'description' => "Service for Plumbing Video Camera Inspection",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 29,
                                     'title' => "Rooter Service",
                                    'description' => "Service for Rooter Service",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 30,
                                     'title' => "Sewer Line Repair & Replacement",
                                    'description' => "Service for Sewer Line Repair & Replacement",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 31,
                                     'title' => "Sewer Line Service & Repair",
                                    'description' => "Service for Sewer Line Service & Repair",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 32,
                                     'title' => "Sewer System Backups",
                                    'description' => "Service for Sewer System Backups",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 33,
                                     'title' => "Tankless Water Heaters",
                                    'description' => "Service for Tankless Water Heaters",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 34,
                                     'title' => "Toilets",
                                    'description' => "Service for Toilets",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 35,
                                     'title' => "Trenchless Sewer Line Repair",
                                    'description' => "Service for Trenchless Sewer Line Repair",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 36,
                                     'title' => "Water Line & Water Leaks",
                                    'description' => "Service for Water Line & Water Leaks",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 37,
                                     'title' => "Water Line Repears",
                                    'description' => "Service for Water Line Repears",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 38,
                                     'title' => "Water Heaters",
                                    'description' => "Service for Water Heaters",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 39,
                                     'title' => "Water Heater Installion",
                                    'description' => "Service for Water Heater Installion",
                                    'parent_id' => 2
                                ]);
                        DB::table('jobs')->insert([
                                    "id" => 40,
                                     'title' => "Water Heater Repair & Replacements",
                                    'description' => "Service for Water Heater Repair & Replacements",
                                    'parent_id' => 2
                                ]);




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
