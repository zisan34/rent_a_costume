<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('date_range')->default(30);
            $table->double('over_date_comission')->default(.3);
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
        Schema::table('order_settings', function (Blueprint $table) {
            //
        });
    }
}
