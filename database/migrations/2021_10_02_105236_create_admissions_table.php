<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('regnumb');
            $table->string('date');
            $table->string('fname');
            $table->string('lname');
            $table->string('father');
            $table->string('mother');
            $table->string('dob');
            $table->string('admnyr'); //academic year
            $table->string('class');
            $table->string('section');
            $table->string('prevskol');
            $table->string('reason');
            $table->string('religion');
            $table->string('referby');
            $table->string('img');
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
        Schema::dropIfExists('admissions');
    }
}
