<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChangeAmountAvailabilities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
       Schema::table('availabilities', function (Blueprint $table) {
            $table->decimal('amount_per_day', 10000, 2)->change();
        });
      
      Schema::table('availabilities', function (Blueprint $table) {
            $table->decimal('amount', 10000, 2)->change();
        });
      
      
      Schema::table('availabilities', function (Blueprint $table) {
            $table->decimal('amount_per_hour', 10000, 2)->change();
        });
      
      
      Schema::table('users', function (Blueprint $table) {
              $table->decimal('ratings', 10000, 2)->change();
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
