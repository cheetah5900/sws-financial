<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisburseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disburses', function (Blueprint $table) {
            $table->id();
            $table->string('disburse_name');
            $table->decimal('disburse_value', $precision = 15, $scale = 2);
            $table->date('disburse_date');
            $table->string('received_date');
            $table->date('payment_ready_date')->nullable();
            $table->string('gr_status');
            $table->string('payment_status');
            $table->string('remark')->nullable();
            $table->string('file_vendor');
            $table->string('file_sws')->nullable();
            $table->integer('person_id');
            $table->integer('vendor_id');
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
        Schema::dropIfExists('disburses');
    }
}
