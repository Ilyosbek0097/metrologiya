<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShablonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shablons', function (Blueprint $table) {
            $table->id();
            $table->string('xizmat_nomi');
            $table->string('tartib_raqami');
            $table->date('amal_qilish_muddati');
            $table->string('etalonlar_nomi');
            $table->string('xujjat_belgilanishi');
            $table->string('metrologik_xizmat_nomi');
            $table->string('xizmat_egasi');
            $table->string('tayyorlovchi');
            $table->string('import_mamlakat');
            $table->string('parametrlari_nomi');
            $table->string('nomlanishi_zavod_raqami');
            $table->string('normativ_hujjat_nomi');
            $table->string('turining_tarifi');
            $table->string('qiyoslovchi');
            $table->date('sanasi');
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
        Schema::dropIfExists('shablons');
    }
}
