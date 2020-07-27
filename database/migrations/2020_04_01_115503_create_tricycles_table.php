<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTricyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tricycles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('regNumber');
            $table->string('colour');
            $table->string('brand');
            $table->string('max_capacity');
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
        Schema::dropIfExists('tricycles');
    }
}
