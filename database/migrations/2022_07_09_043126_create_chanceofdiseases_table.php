<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChanceofdiseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chanceofdiseases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('measuredBMI');
            $table->string('nameoflifestyle-relateddisease');
            $table->string('symptom');
            $table->string('relatedwebsite');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chanceofdiseases');
    }
}
