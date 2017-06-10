<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrepaidBalanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE EVENT prepaid_balance
    ON SCHEDULE
      EVERY 5 Minute
    DO
      UPDATE atoz.prepaid_balance SET information = "Failed" WHERE information = "Pending";');

        Schema::create('prepaid_balance', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->integer('iduser');
            $table->string('phone');
            $table->string('nominal');
            $table->string('description');
            $table->string('information');
            $table->string('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
