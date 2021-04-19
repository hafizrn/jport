<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployerprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employerprofiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employer_id')->unsigned();
            $table->string('company')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('location')->nullable();
            $table->string('category')->nullable();
            $table->text('about')->nullable();
            $table->string('photo')->nullable();
            $table->string('website')->nullable();
            $table->string('companylogo')->nullable();
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
        Schema::dropIfExists('employerprofiles');
    }
}
