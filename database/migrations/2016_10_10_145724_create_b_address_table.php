<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('b_address', function (Blueprint $table) {
            $table->increments('address_id');
            $table->string('bcode');
            $table->string('address');
            $table->integer('city_id');
            $table->string('map');
            $table->string('remark');
            $table->integer('rank');
            $table->timestamp('last_update');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('b_address');
    }
}
