<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWayPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('way_points', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('order_id')->unsigned();
            $table->string('pickup_location', 255);
            $table->string('dropoff_location', 255);
            $table->float('distance', 8, 2);
            $table->integer('minutes');
            $table->integer('status');
            $table->dateTime('arrived_at')->nullable();
            $table->dateTime('pickup_at')->nullable();
            $table->dateTime('dropoff_at')->nullable();
            $table->timestamps();

            $table->foreign('order_id')
                ->references('id')
                ->on('orders')
                ->onDelete('cascade');

            $table->index(['status']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('way_points');
    }
}
