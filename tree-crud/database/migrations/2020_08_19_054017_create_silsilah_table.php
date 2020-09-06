<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSilsilahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('silsilah', function (Blueprint $table) {
            $table->integer('id_silsilah', true);
            $table->string('nama', 50);
            $table->char('jenis_kel', 1);
            $table->integer('id_orang_tua')->nullable()->index('fk_ortu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('silsilah');
    }
}
