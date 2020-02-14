<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNetworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('networks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('model_id');
            $table->string('network_type')->nullable();
            $table->string('network_2g')->nullable();
            $table->string('network_3g')->nullable();
            $table->string('network_4g')->nullable();
            $table->string('network_5g')->nullable();
            $table->string('speed')->nullable();
            $table->string('gprs')->nullable();
            $table->string('edge')->nullable();

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
        Schema::dropIfExists('networks');
    }
}
