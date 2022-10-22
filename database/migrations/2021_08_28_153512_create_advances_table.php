<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advances', function (Blueprint $table) {
            $table->id();
            $table->decimal('advance_value', $precision = 15, $scale = 2);
            $table->decimal('advance_used', $precision = 15, $scale = 2); // ตัวแปรที่บอกว่าใช้ไปแล้วเท่าไร
            $table->date('advance_date');
            $table->text('remark')->nullable();
            $table->string('type'); // ประเภทของ advance ถ้าเป็นอีกอันจะเป็นยอดรับ
            $table->string('file_advance')->nullable();
            $table->integer('person_id');
            $table->integer('vendor_id');
            $table->string('status');
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
        Schema::dropIfExists('advances');
    }
}
