<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
			$table->integer('type_id')->unsigned();
			$table->integer('level_id')->unsigned();
            $table->string('location');
            $table->text('title');
            $table->string('company');
            $table->text('company_info');
            
            $table->string('vacancy')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->text('experiences')->nullable();
            $table->string('salary')->nullable();
            $table->text('educational_qualification')->nullable();
            $table->text('additional_requirements')->nullable();
            $table->longText('responsibilities')->nullable();
            $table->longText('instruction')->nullable(); 
            $table->text('email')->nullable();
            $table->string('deadline')->nullable();
            $table->text('contactperson')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
