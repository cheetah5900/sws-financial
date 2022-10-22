<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseorderlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchaseorderlists', function (Blueprint $table) {
            $table->id();
            $table->string('device_name')->nullable();
            $table->string('amount')->nullable();
            $table->date('priceperunit')->nullable();
            $table->string('total_price')->nullable();            
            $table->string('po_file')->nullable();
            $table->string('remark')->nullable();
            $table->string('po_id')->nullable();
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
        Schema::dropIfExists('purchaseorderlists');
    }
}
