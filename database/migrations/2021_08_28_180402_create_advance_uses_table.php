<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvanceUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advanceuses', function (Blueprint $table) {
            $table->id();
            $table->decimal('advance_value', $precision = 15, $scale = 2);
            $table->text('remark')->nullable();
            $table->string('disburse_id');
            $table->integer('person_id');
            $table->integer('advance_id');
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
        Schema::dropIfExists('advanceuses');
    }
}
