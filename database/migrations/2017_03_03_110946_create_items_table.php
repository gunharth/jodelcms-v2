<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->text('description')->nullable();
            $table->string('glass')->nullable();
            $table->string('metal')->nullable();
            $table->string('flex')->nullable();
            $table->string('bulb')->nullable();
            $table->integer('qty_req')->nullable();
            $table->integer('qty_hot')->nullable();
            $table->integer('qty_cold')->nullable();
            $table->integer('qty_assem')->nullable();
            $table->text('notes')->nullable();
            $table->integer('pdf_rank')->nullable();
            $table->timestamps();

            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
