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
        Schema::create('counterparties', function (Blueprint $table) {
            $table->id();
            $table->integer('1c_id');
            $table->integer('group_id');
            $table->string('name');
            $table->integer('opf_id');
            $table->string('full_name');
            $table->string('short_name');
            $table->string('inn');
            $table->string('kpp');
            $table->string('code_okpo');
            $table->integer('is_security_document');
            $table->integer('is_physical_face');
            $table->integer('is_non_resident');
            $table->integer('is_supplier');
            $table->integer('is_buyer');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('counterparties');
    }
};
