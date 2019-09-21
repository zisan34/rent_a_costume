<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('w_name')->nullable();
            $table->string('w_email')->nullable();
            $table->string('w_address')->nullable();
            $table->string('w_phone')->nullable();
            $table->string('w_logo')->nullable();            
            $table->string('w_image')->nullable();
            $table->text('w_about')->nullable();
            $table->text('w_mission')->nullable();
            $table->string('w_facebook')->nullable();
            $table->string('w_youtube')->nullable();
            $table->string('w_twitter')->nullable();
            $table->string('copyright')->nullable();
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
        Schema::dropIfExists('site_settings');
    }
}
