<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->string('foto',50);
            $table->foreign('rol_id')->
            references('id')->on('rols')
                ->onDelete('set null');
            $table->foreign('gerencia_id')->
            references('id')->on('gerencias')
                ->onDelete('set null');
            $table->timestamps();
        });
        DB::table("usuarios")
            ->insert([
                "nombre" => "Root",
                "paterno" => "Admin",
                "materno" => "Admin",
                "usuario" => "Admin",
                "correo" => "nerialvareze@gmail.com",
                "password" => '$2y$05$V4mIk5uScYgZCTbxCGVfIuqo.3D.2y92olSs1yi624mu2XakX4T9i',
                "rol_id" => 1,
                "gerencia_id" => 1,
                "estatus" => "activo",
                "foto" => '/img/undraw_profile.svg',
                "created_at" => "2021-10-11 02:30:41",
                "updated_at" => "2021-10-11 02:30:41"
            ]);

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
