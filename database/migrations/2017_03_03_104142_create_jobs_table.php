<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client')->nullable();
            $table->string('project')->nullable();
            $table->string('client_ref')->nullable();
            $table->string('job_status')->nullable();
            $table->string('order_type')->nullable();
            $table->date('shipping_date')->nullable();
            $table->text('shipping_notes')->nullable();
            $table->string('parts_status')->nullable();
            $table->text('parts_notes')->nullable();
            $table->text('invoice_notes')->nullable();
            $table->string('payment')->nullable();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
