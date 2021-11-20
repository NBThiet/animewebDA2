<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBloger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_bloger', function (Blueprint $table) {
            $table->Increments('bloger_id');
            $table->string('bloger_name');
            $table->string('bloger_email');
            $table->text('bloger_password');
            $table->text('bloger_phone');
            $table->string('bloger_avt');
            $table->rememberToken();

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
        Schema::dropIfExists('tbl_bloger');
    }
}
