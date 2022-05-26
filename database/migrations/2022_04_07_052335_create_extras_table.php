<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('apart_id')->unsigned();
            $table->boolean('parking')->nullable();
            $table->boolean('restorant')->nullable();
            $table->boolean('wifi')->nullable();
            $table->boolean('otkrit_basein_vazrstni')->nullable();
            $table->boolean('otkrit_basein_deca')->nullable();
            $table->boolean('shezlongi')->nullable();
            $table->boolean('chadari')->nullable();
            $table->boolean('vanshna_gradina')->nullable();
            $table->boolean('jakuzi')->nullable();
            $table->boolean('detski_kat')->nullable();
            $table->boolean('fitness')->nullable();
            $table->boolean('banq_toaletna')->nullable();
            $table->boolean('dush_kabina')->nullable();
            $table->boolean('peralnq')->nullable();
            $table->boolean('klimatik')->nullable();
            $table->boolean('hladilnik')->nullable();
            $table->boolean('mini_bar')->nullable();
            $table->boolean('kotloni')->nullable();
            $table->boolean('absorbator')->nullable();
            $table->boolean('gotvarska_pechka')->nullable();
            $table->boolean('mikrovalnova')->nullable();
            $table->boolean('kana_topla_voda')->nullable();
            $table->boolean('kafemashina')->nullable();
            $table->boolean('LCD_tv')->nullable();
            $table->boolean('terasa_vanshni_mebeli')->nullable();
            $table->boolean('izgled')->nullable();
            $table->boolean('kuhnenski_boks')->nullable();
            $table->boolean('garderob')->nullable();
            $table->boolean('ogledalo')->nullable();
            $table->boolean('skrin')->nullable();
            $table->boolean('noshtna_lampa')->nullable();
            $table->boolean('noshtni_shkafcheta')->nullable();
            $table->boolean('spalnq')->nullable();
            $table->boolean('detska_koshara')->nullable();
            $table->boolean('detsko_stolche_hranene')->nullable();
            $table->boolean('mekamebel')->nullable();
            $table->boolean('kat_za_hranene')->nullable();
            $table->boolean('kat_za_sqdane')->nullable();
            $table->boolean('dostap_invalidi')->nullable();
            $table->boolean('asansior')->nullable();
            $table->boolean('seshoar')->nullable();
            $table->boolean('daska_utia')->nullable();
            $table->boolean('sushilnik_drehi')->nullable();
            $table->boolean('prostor_drehi')->nullable();
            $table->boolean('spalno_belio_havlii')->nullable();
            $table->boolean('chehli')->nullable();
            $table->boolean('kozmetika')->nullable();
            $table->boolean('chadari_plaj')->nullable();
            $table->boolean('toster')->nullable();
            $table->boolean('domakinski_pribori')->nullable();
            $table->boolean('prahosmukachka')->nullable();
            $table->boolean('bilard')->nullable();
            $table->boolean('tenis_na_masa')->nullable();
            $table->boolean('ohrana')->nullable();
            $table->boolean('videonabludenie')->nullable();
            $table->timestamps();

            $table->foreign('apart_id')->references('id')->on('apartments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extras');
    }
}
