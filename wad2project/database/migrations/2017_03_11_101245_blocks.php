<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Blocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
    {
             Schema::create('blocks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id')->unsigned();
            $table->string('block_name', 50);
            $table->string('transparency', 50);
            $table->string('luminance',50);
            $table->integer('blast_resistance');
            $table->string('renewable', 50);
            $table->string('stackable', 50);
            $table->string('flammable', 50);
            $table->string('drops', 50);
            $table->string('description', 10000);
            $table->timestamps();


            $table->foreign('type_id')
            ->references('id')
            ->on('types')
            ->onDelete('cascade');
        
        });
            }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
                Schema::dropIfExists('blocks');
    }
}
