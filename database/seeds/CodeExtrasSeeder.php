<?php

use Illuminate\Database\Seeder;
use App\CodeExtra;

class CodeExtrasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $icon = [
            [
                'parking_code'=>'iconoir:parking',
        'restorant_code'=>'maki:restaurant',
        'wifi_code'=>'fontisto:wifi-logo',
        'otkrit_basein_vazrstni_code'=>'ic:round-pool',
        'otkrit_basein_deca_code'=>'icon-park-outline:waterpolo-one',
        'shezlongi_code'=>'icon-park-outline:sunbath',
        'chadari_code'=>'icon-park-outline:beach-umbrella',
        'vanshna_gradina_code'=>'healthicons:forest-persons',
        'jakuzi_code'=>'icon-park:swimming-pool',
        'detski_kat_code'=>'maki:playground',
        'fitness_code'=>'arcticons:myfitnesspal',
        'banq_toaletna_code'=>'map:toilet',
        'dush_kabina_code'=>'fa:shower',
        'peralnq_code'=>'ic:outline-local-laundry-service',
        'klimatik_code'=>'icon-park-outline:air-conditioning',
        'hladilnik_code'=>'gg:smart-home-refrigerator',
        'mini_bar_code'=>'ic:round-kitchen',
        'kotloni_code'=>'icon-park-outline:hand-painted-plate',
        'absorbator_code'=>'file-icons:v8-turbofan',
        'gotvarska_pechka_code'=>'fe:kitchen-cooker',
        'mikrovalnova_code'=>'mdi:toaster-oven',
        'kana_topla_voda_code'=>'mdi:kettle-pour-over',
        'kafemashina_code'=>'ic:outline-coffee-maker',
        'LCD_tv_code'=>'fluent:tv-20-regular',
        'terasa_vanshni_mebeli_code'=>'ic:round-balcony',
        'izgled_code'=>'mdi:binoculars',
        'kuhnenski_boks_code'=>'emojione-monotone:fork-and-knife-with-plate',
        'garderob_code'=>'mdi:wardrobe-outline',
        'ogledalo_code'=>'mdi:mirror-variant',
        'skrin_code'=>'mdi:dresser-outline',
        'noshtna_lampa_code'=>'fa6-solid:solar-panel',
        'noshtni_shkafcheta_code'=>'icon-park-outline:treasure-chest',
        'spalnq_code'=>'emojione-monotone:bed',
        'detska_koshara_code'=>'tabler:armchair',
        'detsko_stolche_hranene_code'=>'icon-park-outline:chair-one',
        'mekamebel_code'=>'ri:hotel-bed-line',
        'kat_za_hranene_code'=>'icon-park-outline:chair-one',
        'dostap_invalidi_code'=>'cil:disabled',
        'asansior_code'=>'foundation:elevator',
        'seshoar_code'=>'mdi:hair-dryer-outline',
        'daska_utia_code'=>'icon-park-outline:electric-iron',
        'sushilnik_drehi_code'=>' icon-park:clothes-short-sleeve',
        'prostor_drehi_code'=>' icon-park:clothes-short-sleeve',
        'spalno_belio_havlii_code'=>'bi:file-earmark-spreadsheet',
        'chehli_code'=>'icon-park-outline:slippers',
        'kozmetika_code'=>'mdi:toothbrush-paste',
        'chadari_plaj_code'=>'emojione-monotone:umbrella-on-ground',
        'toster_code'=>'mdi:toaster',
        'domakinski_pribori_code'=>'ps:cutlery',
        'prahosmukachka_code'=>'icon-park-outline:vacuum-cleaner',
        'bilard_code'=>'emojione:pool-8-ball',
        'tenis_na_masa_code'=>'icon-park-outline:tabletennis',
        'ohrana_code'=>'healthicons:security-worker',
        'videonabludenie_code'=>'bx:cctv',
            ],
        ];

        foreach ($icon as $key => $value) {
            CodeExtra::create($value);
        }
       
    }
}
