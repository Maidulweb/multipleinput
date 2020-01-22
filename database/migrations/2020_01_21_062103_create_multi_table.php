<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ielts');
            $table->string('pte');
            $table->string('ielts_reading');
            $table->string('ielts_speaking');
            $table->string('ielts_writing');
            $table->string('ielts_listening');
            $table->string('ielts_overall_score');
            $table->string('pte_reading');
            $table->string('pte_speaking');
            $table->string('pte_writing');
            $table->string('pte_listening');
            $table->string('pte_overall_score');
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
        Schema::dropIfExists('misevens');
    }
}
