<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisplaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('displays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('model_id');
            $table->string('display_type')->nullable();
            $table->string('display_size')->nullable();
            $table->string('display_resolution')->nullable();
            $table->string('display_multitouch')->nullable();
            $table->string('display_density')->nullable();
            $table->string('display_screen_protection')->nullable();

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
        Schema::dropIfExists('displays');
    }
}
