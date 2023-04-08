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
        Schema::table('toilets', function (Blueprint $table) {
        $table->string('urine_one')->nullable()->change();
        $table->string('urine_two')->nullable()->change();
        $table->string('urine_three')->nullable()->change();
        $table->string('ben_one')->nullable()->change();
        $table->string('ben_two')->nullable()->change();
        $table->string('ben_three')->nullable()->change();
        $table->string('filename')->nullable()->change();
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('toilets', function (Blueprint $table) {
            //
        });
    }
};
