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
            $table->decimal('amountPerHour', 5, 2)->default(0.00);
        });
        
        Schema::table('bookings', function (Blueprint $table) {
            $table->decimal('amountPerDay', 5, 2)->default(0.00);
        });

        Schema::table('bookings', function (Blueprint $table) {
            $table->string('reason')->default('');
        });
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('rate')->default('');
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
            $table->dropColumn('amountPerDay');
        });
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('amountPerHour');
        });
        

        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('reason');
        });
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('rate');
        });
    }
}
