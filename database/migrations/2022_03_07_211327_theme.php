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

        Schema::create('theme', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('slug');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations. $table
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
