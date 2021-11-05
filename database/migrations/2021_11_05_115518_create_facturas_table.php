<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id("id_serie");
            $table->string("nombre_persona", 100);
            $table->double("precio_pago");
            $table->string("documento_persona");
            $table->date("fecha_facturacion");
            $table->string("nombre_empresa");
            $table->string("razon_pago");
            $table->string("celular")->nullable();
            //$table->string("ejemplo")->unique()->index();
            //$table->foreignId("id_foreig")->references("id_venta")->on("ventas")->onDelete("setNull");
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
        Schema::dropIfExists('facturas');
    }
}
