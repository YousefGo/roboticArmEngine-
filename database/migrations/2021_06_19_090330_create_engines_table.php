<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnginesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engines', function (Blueprint $table) {
            $table->id();
            $table->string('engineN1')->default('0');
            $table->string('engineN2')->default('0');
            $table->string('engineN3')->default('0');
            $table->string('engineN4')->default('0');
            $table->string('engineN5')->default('0');
            $table->string('engineN6')->default('0');
            $table->string('status')->enum(['on','off'])->default('off');

          
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
        Schema::dropIfExists('engines');
    }
}
