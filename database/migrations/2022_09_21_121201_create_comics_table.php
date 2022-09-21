<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 100);
            $table->text('description');
            $table->string('thumb');
            $table->float('price', 4, 2)->unsigned();
            $table->string('series', 100);
            $table->string('sale_date');
            $table->string('type', 100);
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
}
