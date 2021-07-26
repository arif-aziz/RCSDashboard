<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRcssummaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rcssummary', function (Blueprint $table) {
            $table->increments('rcsid');
            $table->date('rcsdate');
            $table->string('rcsmonth',2);
            $table->string('rcsyear',4);
            $table->integer('rcscluster');
            $table->string('rcsoutletid',8);
            $table->string('rcsoutletname',50);
            $table->string('rcssalesname',50);
            $table->string('rcsscc',50);
            $table->integer('dla2')->nullable();
            $table->integer('dlbse')->nullable();
            $table->integer('dlprime')->nullable();
            $table->integer('dll')->nullable();
            $table->integer('dlmifi')->nullable();
            $table->integer('dlspgsm')->nullable();
            $table->integer('dlspnow')->nullable();
            $table->integer('dlspnowplus')->nullable();
            $table->integer('opa2')->nullable();
            $table->integer('opbse')->nullable();
            $table->integer('opprime')->nullable();
            $table->integer('opl')->nullable();
            $table->integer('opmifi')->nullable();
            $table->integer('opspgsm')->nullable();
            $table->integer('opspnow')->nullable();
            $table->integer('opspnowplus')->nullable();
            $table->integer('chipeloadreg')->nullable();
            $table->integer('chipeloadtrx')->nullable();
            $table->integer('srisreg')->nullable();
            $table->integer('srisinsentive')->nullable();
            $table->integer('jcplan')->nullable();
            $table->integer('jcactual')->nullable();
            $table->integer('jceffective')->nullable();
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
        Schema::dropIfExists('rcssummary');
    }
}
