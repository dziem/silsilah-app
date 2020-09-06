<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeForeignKeySilsilah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {	
		Schema::table('silsilah', function (Blueprint $table) {
			$table->dropForeign('fk_ortu');
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
        $table->dropForeign('fk_ortu');
    }
}
