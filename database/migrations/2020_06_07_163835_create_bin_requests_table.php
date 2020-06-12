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
            $table->integer('bin_current_level');
            $table->integer('current_weight');
            $table->integer('smoke_state');
            $table->integer('bin_state');
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
