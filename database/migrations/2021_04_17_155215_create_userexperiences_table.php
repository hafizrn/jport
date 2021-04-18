<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserexperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userexperiences', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('company');
            $table->string('company_type')->nullable();
            $table->string('designation')->nullable();
            $table->text('responsibilities')->nullable();
            $table->string('duration')->nullable();
            $table->string('department')->nullable();
            $table->text('employment_area')->nullable();
            $table->string('company_location')->nullable();
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
        Schema::dropIfExists('userexperiences');
    }
}
