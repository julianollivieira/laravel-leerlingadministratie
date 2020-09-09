<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolloopbanenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolloopbanen', function (Blueprint $table) {
            $table->id();
            $table->integer('cursusjaar_id');
            $table->integer('opleiding_id');
            $table->integer('klas_id');
            $table->integer('student_id');
            $table->date('begindatum');
            $table->date('einddatum');
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
        Schema::dropIfExists('schoolloopbanen');
    }
}
