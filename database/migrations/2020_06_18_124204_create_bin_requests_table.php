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
//        Schema::create('bin_requests', function (Blueprint $table) {
//            $table->bigIncrements('id');
//            $table->integer('bin_id');
//            $table->integer('bin_current_level');
//            $table->integer('current_weight');
//            $table->integer('smoke_state');
//            $table->integer('bin_state');
//            $table->integer('request_state');
//            $table->timestamps();
//        });

        Schema::create('bin_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bin_id');
            $table->double('waste_level');
            $table->integer('smoke_noti');
            $table->double('weight');
            $table->string('location_id');
            $table->boolean('request_state')->default(false);
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
