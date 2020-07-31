<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBinRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('bin_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bin_id');
            $table->float('current_level');
            $table->float('current_weight');
            $table->boolean('smoke_noti');
            $table->float('location_long');
            $table->float('location_lat');
            $table->integer('request_state')->default(1);
            $table->integer('request_type')->default(0);
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
        Schema::dropIfExists('bin_requests');
    }
}
