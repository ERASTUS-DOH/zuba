<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManualPickRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manual_pick_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bin_id');
            $table->float('current_level');
            $table->float('current_weight');
            $table->boolean('smoke_noti');
            $table->string('location_long');
            $table->string('location_lat');
            $table->integer('request_state')->default(1);
//            $table->foreign('request_state')->references('id')->on('request_states');
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
        Schema::dropIfExists('manual_pick_requests');
    }
}
