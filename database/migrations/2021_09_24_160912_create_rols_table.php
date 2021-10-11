<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rols', function (Blueprint $table) {
            $table->id();
            $table->string('rol',50);
            $table->timestamps();
        });
        DB::table("rols")
            ->insert([
                "rol" => "Admin",
                "created_at" => "2021-10-11 02:30:41",
                "updated_at" => "2021-10-11 02:30:41"
            ]);
        DB::table("rols")
            ->insert([
                "rol" => "User",
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
        Schema::dropIfExists('rols');
    }
}
