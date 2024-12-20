<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fuel_stations', function (Blueprint $table) {
            $table->enum('status', ['unpaid', 'paid'])->default('unpaid')->after('amount');
            $table->enum('type_fuel', ['diesel', 'gasoline','gas'])->default('diesel')->after(' amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fuel_stations', function (Blueprint $table) {
          $table->dropColumn(['status','type_fuel']);
        });
    }
};
