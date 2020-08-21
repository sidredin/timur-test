<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFksToPhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('phones', function (Blueprint $table) {
            $table->unsignedBigInteger('person_id');
            $table->foreign('person_id')->references('id')->on('people');

            $table->unsignedBigInteger('phone_type_id');
            $table->foreign('phone_type_id')->references('id')->on('phone_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('phones', function (Blueprint $table) {
            $table->dropColumn(['person_id', 'phone_type_id',]);
        });
    }
}
