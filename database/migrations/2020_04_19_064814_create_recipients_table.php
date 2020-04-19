<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('way_point_id')->unsigned();
            $table->string('name', 255);
            $table->string('phone', 255);
            $table->string('parcel_description', 1000);
            $table->timestamps();

            $table->foreign('way_point_id')
                ->references('id')
                ->on('way_points')
                ->onDelete('cascade');

            $table->index(['name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipients');
    }
}
