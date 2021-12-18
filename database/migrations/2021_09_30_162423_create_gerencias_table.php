<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateGerenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gerencias', function (Blueprint $table) {
            $table->id();
            $table->string('gerencia','50');
            $table->timestamps();
        });
        DB::table("gerencias")
            ->insert([
                "gerencia" => "General",
                "created_at" => "2021-10-11 02:30:41",
                "updated_at" => "2021-10-11 02:30:41"
            ]);
        DB::table("gerencias")
            ->insert([
                "gerencia" => "Compras",
                "created_at" => "2021-10-11 02:30:41",
                "updated_at" => "2021-10-11 02:30:41"
            ]);
        DB::table("gerencias")
            ->insert([
                "gerencia" => "Ventas",
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
        Schema::dropIfExists('gerencias');
    }
}
