<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nickname');
            $table->string('serialNumber');
            $table->string('max_level');
            $table->string('maxWeight');
            $table->string('locationID')->nullable();
            $table->boolean('smoke_noti')->nullable();
            $table->boolean('assign_state')->default(false);

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
        Schema::dropIfExists('bins');
    }
}
