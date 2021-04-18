<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserresumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userresumes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('first_name')->default('First Name');
            $table->string('last_name')->default('Last Name');
            $table->string('fathers_name')->default('Fathers Name');
            $table->string('mothers_name')->default('Mothers Name');
            $table->string('gender')->default('Gender');
            $table->string('religion')->default('Religion');
            $table->string('marital_status')->default('Marital Status');
            $table->string('national_id')->default('nid no');
            $table->string('birthdate')->default('dd-mm-yyyy');
            $table->string('nationality')->default('Bangladeshi');
            $table->string('mobile_no')->default('xxxx-xxxxxxx');
            $table->string('email')->default('email@address.com');
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->text('objective')->nullable();
            $table->string('present_salary')->default('Present Salary');
            $table->string('expected_salary')->default('Expected Salary');
            $table->string('preferred_categories')->default('preferred Categories');
            $table->text('career_summary')->nullable();
            $table->text('special_qualification')->nullable();
            $table->text('skills')->nullable();
            $table->text('about')->nullable();
            $table->string('photo')->default('user.jpg');
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
        Schema::dropIfExists('userresumes');
    }
}
