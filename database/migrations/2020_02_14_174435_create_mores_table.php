<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('model_id');
            $table->string('made_by')->nullable();
            $table->string('body_color')->nullable();
            $table->string('other_features')->nullable();

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
        Schema::dropIfExists('mores');
    }
}
