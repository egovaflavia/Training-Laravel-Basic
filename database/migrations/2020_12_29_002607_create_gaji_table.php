<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGajiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaji', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tglgaji');
            $table->integer('nip');
            $table->double('gajipokok');
            $table->double('tunjangan');
            $table->double('potongan');
            $table->double('gajibersih');
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
        Schema::dropIfExists('gaji');
    }
}
