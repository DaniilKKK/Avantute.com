<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tour_id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('collaborator_id');
            $table->date('dateIssue');
            $table->timestamps();

            $table->foreign('tour_id')->references('id')->on('tours');
            $table->foreign('client_id')->references('id')->on('users');
            $table->foreign('collaborator_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}