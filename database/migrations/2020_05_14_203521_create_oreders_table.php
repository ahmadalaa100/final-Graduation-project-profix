<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOredersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('mail');
            $table->string('phone');
            $table->string('addreess');
            $table->string('spec');
            $table->string('pay');
            $table->integer('price')->default(0);
            $table->unsignedBigInteger('tech_id')->nullable();
            $table->foreign('tech_id')->references('id')->on('technicians');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->boolean('payed')->default(0);
            $table->date('jobDate');
            $table->time('jobTime');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('oreders');
    }
}
