<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            //$table->bigIncrements('id');
            $table->string('ews_token',1500);
            $table->string('ews_no_solicitud',15);
            $table->string('ews_llave' ,100);
            $table->unsignedSmallInteger('ews_id_tramite');
            $table->date('ews_fecha_solicitud');
            $table->time('ews_hora_solicitud');
            $table->unsignedInteger('ews_no_solicitud_api')->autoIncrement();
            $table->string("ews_matricula",8);
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
        Schema::dropIfExists('solicitudes');
    }
}
