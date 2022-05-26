<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodeExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('code_extras', function (Blueprint $table) {
            $table->id();
            $table->string('parking_code');
            $table->string('restorant_code');
            $table->string('wifi_code');
            $table->string('otkrit_basein_vazrstni_code');
            $table->string('otkrit_basein_deca_code');
            $table->string('shezlongi_code');
            $table->string('chadari_code');
            $table->string('vanshna_gradina_code');
            $table->string('jakuzi_code');
            $table->string('detski_kat_code');
            $table->string('fitness_code');
            $table->string('banq_toaletna_code');
            $table->string('dush_kabina_code');
            $table->string('peralnq_code');
            $table->string('klimatik_code');
            $table->string('hladilnik_code');
            $table->string('mini_bar_code');
            $table->string('kotloni_code');
            $table->string('absorbator_code');
            $table->string('gotvarska_pechka_code');
            $table->string('mikrovalnova_code');
            $table->string('kana_topla_voda_code');
            $table->string('kafemashina_code');
            $table->string('LCD_tv_code');
            $table->string('terasa_vanshni_mebeli_code');
            $table->string('izgled_code');
            $table->string('kuhnenski_boks_code');
            $table->string('garderob_code');
            $table->string('ogledalo_code');
            $table->string('skrin_code');
            $table->string('noshtna_lampa_code');
            $table->string('noshtni_shkafcheta_code');
            $table->string('spalnq_code');
            $table->string('detska_koshara_code');
            $table->string('detsko_stolche_hranene_code');
            $table->string('mekamebel_code');
            $table->string('kat_za_hranene_code');
            $table->string('kat_za_sqdane_code');
            $table->string('dostap_invalidi_code');
            $table->string('asansior_code');
            $table->string('seshoar_code');
            $table->string('daska_utia_code');
            $table->string('sushilnik_drehi_code');
            $table->string('prostor_drehi_code');
            $table->string('spalno_belio_havlii_code');
            $table->string('chehli_code');
            $table->string('kozmetika_code');
            $table->string('chadari_plaj_code');
            $table->string('toster_code');
            $table->string('domakinski_pribori_code');
            $table->string('prahosmukachka_code');
            $table->string('bilard_code');
            $table->string('tenis_na_masa_code');
            $table->string('ohrana_code');
            $table->string('videonabludenie_code');
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
        Schema::dropIfExists('code_extras');
    }
}
