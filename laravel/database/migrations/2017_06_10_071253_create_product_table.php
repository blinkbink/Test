<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE EVENT product
    ON SCHEDULE
      EVERY 5 Minute
    DO
      UPDATE atoz.product SET information = "Failed" WHERE information = "Pending";');

        Schema::create('product', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->integer('iduser');
            $table->string('name_product');
            $table->string('address');
            $table->string('price');
            $table->string('total');
            $table->string('description');
            $table->string('information');
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
