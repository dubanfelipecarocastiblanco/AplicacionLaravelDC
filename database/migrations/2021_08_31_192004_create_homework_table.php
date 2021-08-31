<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homework', function (Blueprint $table) {
            $table->increments('id_homework');
            $table->string('Name_Student');
            $table->string('Description_Homework');
            $table->string('State_Homework');
            $table->date('Date_Homework');
            $table->time('Hour_Homework');

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
        Schema::dropIfExists('homework');
    }
}
