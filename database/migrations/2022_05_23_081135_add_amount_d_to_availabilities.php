<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAmountDToAvailabilities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('availabilities', function (Blueprint $table) {
            $table->decimal('amount_per_day', 5, 2)->default(0.00);
        });


        Schema::table('availabilities', function (Blueprint $table) {
            $table->decimal('amount_per_hour', 5, 2)->default(0.00);
        });
      
        Schema::table('users', function (Blueprint $table) {
              $table->decimal('ratings', 5, 2)->default(0.00);
          });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('availabilities', function (Blueprint $table) {
            $table->dropColumn('amount_per_hour');
        });
      
        Schema::table('availabilities', function (Blueprint $table) {
            $table->dropColumn('amount_per_day');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('ratings');
        });
      
    }
}
