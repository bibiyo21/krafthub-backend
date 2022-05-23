<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAccessLevelToUsers extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
    {
   

        Schema::table('bookings', function (Blueprint $table) {
            $table->string('reason')->default('');
        });
        Schema::table('bookings', function (Blueprint $table) {
           $table->decimal('rate', 5, 2)->default(0.00);
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      

        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('reason');
        });
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('rate');
        });
    }
}
