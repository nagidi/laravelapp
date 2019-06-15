<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('firstname');
			$table->string('lastname');
			$table->string('officalname');
			$table->string('gender');
			$table->string('dob');
			$table->string('countrycitizen');
			$table->string('countrybirth');
			$table->string('address1');
			$table->string('address2');
			$table->string('city');
			$table->string('postelcode');
			$table->string('country');
			$table->string('provience');
			$table->string('emailaddress');
			$table->string('phone');
			$table->string('cell');
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
        //
    }
}
