<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('product_id');
            $table->integer('user_id');
            $table->string('order_batch')->nullable();
            $table->integer('quantity');
            $table->integer('total_amount');
            $table->date('start_date');
            $table->date('end_date');
            $table->double('tax')->default(0);
            $table->double('over_date_comission')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
