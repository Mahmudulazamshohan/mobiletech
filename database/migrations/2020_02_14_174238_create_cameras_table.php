<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cameras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('model_id');
            $table->string('primary_camera')->nullable();
            $table->string('secondary_camera')->nullable();
            $table->string('camera_features')->nullable();
            $table->string('video')->nullable();

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
        Schema::dropIfExists('cameras');
    }
}
