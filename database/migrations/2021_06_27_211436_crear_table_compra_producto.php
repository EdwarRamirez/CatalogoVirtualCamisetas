<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTableCompraProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compraProductos', function (Blueprint $table) {
            $table->id();
            $table->string('usuario', 100);
            $table->string('producto', 100);
            $table->unsignedInteger('cantidad');
            $table->unsignedInteger('valor');
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
        Schema::drop('compraProductos');
    }
}
