<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSilsilahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('silsilah', function (Blueprint $table) {
            $table->foreign('id_orang_tua', 'fk_ortu')->references('id_silsilah')->on('silsilah')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('silsilah', function (Blueprint $table) {
            $table->dropForeign('fk_ortu');
        });
    }
}
