<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    // Mass assigned
    protected $fillable=[
        'apart_id',
    'parking',
    'restorant',
    'wifi',
    'otkrit_basein_vazrstni',
    'otkrit_basein_deca',
    'shezlongi',
    'chadari',
    'vanshna_gradina',
    'jakuzi',
    'detski_kat',
    'fitness',
    'banq_toaletna',
    'dush_kabina',
    'peralnq',
    'klimatik',
    'hladilnik',
    'mini_bar',
    'kotloni',
    'absorbator',
    'gotvarska_pechka',
    'mikrovalnova',
    'kana_topla_voda',
    'kafemashina',
    'LCD_tv',
    'terasa_vanshni_mebeli',
    'izgled',
    'kuhnenski_boks',
    'garderob',
    'ogledalo',
    'skrin',
    'noshtna_lampa',
    'noshtni_shkafcheta',
    'spalnq',
    'detska_koshara',
    'detsko_stolche_hranene',
    'mekamebel',
    'kat_za_hranene',
    'kat_za_sqdane',
    'dostap_invalidi',
    'asansior',
    'seshoar',
    'daska_utia',
    'sushilnik_drehi',
    'prostor_drehi',
    'spalno_belio_havlii',
    'chehli',
    'kozmetika',
    'chadari_plaj',
    'toster',
    'domakinski_pribori',
    'prahosmukachka',
    'bilard',
    'tenis_na_masa',
    'ohrana',
    'videonabludenie',
    ];

    public function apartment()
    {
        return $this->belongsTo('App\Apartment');
    }
}
