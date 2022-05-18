<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('counterparty_id')->unsigned()->index();
            $table->string('bank_name');
            $table->string('bik');
            $table->string('correspondent_account');
            $table->string('checking account');
            $table->string('account_type');
            $table->integer('current_id');
            $table->foreign('counterparty_id')->references('id')->on('counterparties')->onDelete('cascade');
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
        Schema::dropIfExists('banks');
    }
};
