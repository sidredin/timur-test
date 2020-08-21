<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->string('snils', 50);
            $table->enum('sex', ['М', 'Ж']);
            $table->date('birthdate');
            $table->boolean('with_mother')->default(false);
            $table->boolean('with_father')->default(false);
            $table->string('speсiality', 50);
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
