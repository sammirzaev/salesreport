<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInquriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('status_id')->index()->unsigned()->nullable();
            $table->integer('category_id')->index()->unsigned()->nullable();
            $table->string('date');
            $table->string('company');
            $table->string('industry');
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->string('fullName');
            $table->string('position');
            $table->string('email');
            $table->string('phnumber');
            $table->string('subject')->nullable();
            $table->text('description');
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('inquries');
    }
}
