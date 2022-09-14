<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            /*Estos vienen por defecto*/

            $table->id();
            $table->timestamps();

            /*Campos que va a contener nuestra tabla*/

            $table ->string('name');
            $table ->string('last_name');
            $table ->string('job');
            $table ->string('phone');
            $table ->text('address');
            $table ->string('age');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
