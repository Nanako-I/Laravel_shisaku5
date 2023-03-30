<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('person_name');//追記
            $table->string('date_of_birth');
            // $table->integer('age');
            $table->string('gender')->nullable();
            $table->string('profile_image')->nullable();
			$table->text('disability_name')->nullable();//追記
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
};
