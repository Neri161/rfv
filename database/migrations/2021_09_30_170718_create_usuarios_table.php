<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('paterno', 50);
            $table->string('materno', 50);
            $table->string('usuario', 50);
            $table->string('correo', 100);
            $table->text('password');
            $table->text('token_recovery')->nullable();
            $table->unsignedBigInteger('rol_id')->nullable();
            $table->unsignedBigInteger('gerencia_id')->nullable();
            $table->string('estatus',50);
            $table->foreign('rol_id')->
            references('id')->on('rols')
                ->onDelete('set null');
            $table->foreign('gerencia_id')->
            references('id')->on('gerencias')
                ->onDelete('set null');
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
        Schema::dropIfExists('usuarios');
    }
}
