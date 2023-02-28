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

     /** El ORM de PHP es Eloquent */

    public function up()
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->id();

            //$table->unsignedBigInteger('use_id');

            //son lo mismo
            //$table->foreign('use_id')->references('id')->on('users');
            //$table->foreignId('user_id')->constrained();
            //$table->foreignId('use_id')->constrained('users');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('name');
            $table->string('gatos');
            $table->integer('edad');
            $table->string('caracteristica');
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
        Schema::dropIfExists('cats');
    }
};
