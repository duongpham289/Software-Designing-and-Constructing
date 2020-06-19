<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OnewayTicket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oneway_ticket', function (Blueprint $table){
            $table->increments('id');
            $table->integer('id_customer')->unsigned();
            $table->string('from');
            $table->string('to');
            $table->string('departure');
            $table->integer('price');
            $table->string('code_trade')->nullable();
            $table->foreign('id_customer')->references('id')->on('accounts');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
