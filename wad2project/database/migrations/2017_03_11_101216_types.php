<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Types extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('types', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('type_name', 50);
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
                       Schema::dropIfExists('types');

    }
}
