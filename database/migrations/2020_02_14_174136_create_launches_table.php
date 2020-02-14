<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaunchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('launches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('model_id');
            $table->string('launch_announcement')->nullable();
            $table->string('launch_date')->nullable();
            $table->foreign('model_id')
                ->references('id')->on('models')
                ->onDelete('cascade');
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
        Schema::dropIfExists('launches');
    }
}
