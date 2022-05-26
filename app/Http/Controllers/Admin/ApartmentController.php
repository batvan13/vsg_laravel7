<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\ApartmentImage;
use App\Apartment;
use App\Extra;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $apartments = Apartment::all();

        return view('Admin.apartment.index',compact('apartments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.apartment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'apart_name'=>'required',
           'address'=>'required',
           'desc_short'=>'required',
           'desc_long'=>'required'
        ]);
        $apart_id = Apartment::create([
            'apart_name'=>$request->apart_name,
            'address'=>$request->address,
            'desc_short'=>$request->desc_short,
            'desc_long'=>$request->desc_long,
            'slug'=>Str::slug($request->apart_name)
        ]);
        Extra::create([
                'apart_id'=>$apart_id->id,
                'parking'=>$request->parking,
                'restorant'=>$request->restorant,
                'wifi'=>$request->wifi,
                'otkrit_basein_vazrstni'=>$request->otkrit_basein_vazrstni,
                'otkrit_basein_deca'=>$request->otkrit_basein_deca,
                'shezlongi'=>$request->shezlongi,
                'chadari'=>$request->chadari,
                'vanshna_gradina'=>$request->vanshna_gradina,
                'jakuzi'=>$request->jakuzi,
                'detski_kat'=>$request->detski_kat,
                'fitness'=>$request->fitness,
                'banq_toaletna'=>$request->banq_toaletna,
                'dush_kabina'=>$request->dush_kabina,
                'peralnq'=>$request->peralnq,
                'klimatik'=>$request->klimatik,
                'hladilnik'=>$request->hladilnik,
                'mini_bar'=>$request->mini_bar,
                'kotloni'=>$request->kotloni,
                'absorbator'=>$request->absorbator,
                'gotvarska_pechka'=>$request->gotvarska_pechka,
                'mikrovalnova'=>$request->mikrovalnova,
                'kana_topla_voda'=>$request->kana_topla_voda,
                'kafemashina'=>$request->kafemashina,
                'LCD_tv'=>$request->LCD_tv,
                'terasa_vanshni_mebeli'=>$request->terasa_vanshni_mebeli,
                'izgled'=>$request->izgled,
                'kuhnenski_boks'=>$request->kuhnenski_boks,
                'garderob'=>$request->garderob,
                'ogledalo'=>$request->ogledalo,
                'skrin'=>$request->skrin,
                'noshtna_lampa'=>$request->noshtna_lampa,
                'noshtni_shkafcheta'=>$request->noshtni_shkafcheta,
                'spalnq'=>$request->spalnq,
                'detska_koshara'=>$request->detska_koshara,
                'detsko_stolche_hranene'=>$request->detsko_stolche_hranene,
                'mekamebel'=>$request->mekamebel,
                'kat_za_hranene'=>$request->kat_za_hranene,
                'kat_za_sqdane'=>$request->kat_za_sqdane,
                'dostap_invalidi'=>$request->dostap_invalidi,
                'asansior'=>$request->asansior,
                'seshoar'=>$request->seshoar,
                'daska_utia'=>$request->daska_utia,
                'sushilnik_drehi'=>$request->sushilnik_drehi,
                'prostor_drehi'=>$request->prostor_drehi,
                'spalno_belio_havlii'=>$request->spalno_belio_havlii,
                'chehli'=>$request->chehli,
                'kozmetika'=>$request->kozmetika,
                'chadari_plaj'=>$request->chadari_plaj,
                'toster'=>$request->toster,
                'domakinski_pribori'=>$request->domakinski_pribori,
                'prahosmukachka'=>$request->prahosmukachka,
                'bilard'=>$request->bilard,
                'tenis_na_masa'=>$request->tenis_na_masa,
                'ohrana'=>$request->ohrana,
                'videonabludenie'=>$request->videonabludenie
        ]);
        $id=$apart_id->id;
                session()->put('id',$id);

                return redirect()->route('image');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $apartment=Apartment::find($id);
        $extra = Extra::where('apart_id',$apartment->id)->get();
        //dd($extra);

        return view('Admin.apartment.edit',compact('apartment','extra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
                   'apart_name'=>'required',
                   'address'=>'required',
                   'desc_short'=>'required',
                   'desc_long'=>'required'
                ]);
        $apart = Apartment::find($id);
                $apart->apart_name = $request->get('apart_name');
                $apart->address = $request->get('address');
                $apart->desc_short = $request->get('desc_short');
                $apart->desc_long = $request->get('desc_long');
                $apart->save();

        DB::table('extras')
                   ->where('apart_id',$apart->id)
                   ->update([
                   'parking'=>$request->parking,
                   'restorant'=>$request->restorant,
                   'wifi'=>$request->wifi,
                   'otkrit_basein_vazrstni'=>$request->otkrit_basein_vazrstni,
                   'otkrit_basein_deca'=>$request->otkrit_basein_deca,
                   'shezlongi'=>$request->shezlongi,
                   'chadari'=>$request->chadari,
                   'vanshna_gradina'=>$request->vanshna_gradina,
                   'jakuzi'=>$request->jakuzi,
                   'detski_kat'=>$request->detski_kat,
                   'fitness'=>$request->fitness,
                   'banq_toaletna'=>$request->banq_toaletna,
                   'dush_kabina'=>$request->dush_kabina,
                   'peralnq'=>$request->peralnq,
                   'klimatik'=>$request->klimatik,
                   'hladilnik'=>$request->hladilnik,
                   'mini_bar'=>$request->mini_bar,
                   'kotloni'=>$request->kotloni,
                   'absorbator'=>$request->absorbator,
                   'gotvarska_pechka'=>$request->gotvarska_pechka,
                   'mikrovalnova'=>$request->mikrovalnova,
                   'kana_topla_voda'=>$request->kana_topla_voda,
                   'kafemashina'=>$request->kafemashina,
                   'LCD_tv'=>$request->LCD_tv,
                   'terasa_vanshni_mebeli'=>$request->terasa_vanshni_mebeli,
                   'izgled'=>$request->izgled,
                   'kuhnenski_boks'=>$request->kuhnenski_boks,
                   'garderob'=>$request->garderob,
                   'ogledalo'=>$request->ogledalo,
                   'skrin'=>$request->skrin,
                   'noshtna_lampa'=>$request->noshtna_lampa,
                   'noshtni_shkafcheta'=>$request->noshtni_shkafcheta,
                   'spalnq'=>$request->spalnq,
                   'detska_koshara'=>$request->detska_koshara,
                   'detsko_stolche_hranene'=>$request->detsko_stolche_hranene,
                   'mekamebel'=>$request->mekamebel,
                   'kat_za_hranene'=>$request->kat_za_hranene,
                   'kat_za_sqdane'=>$request->kat_za_sqdane,
                   'dostap_invalidi'=>$request->dostap_invalidi,
                   'asansior'=>$request->asansior,
                   'seshoar'=>$request->seshoar,
                   'daska_utia'=>$request->daska_utia,
                   'sushilnik_drehi'=>$request->sushilnik_drehi,
                   'prostor_drehi'=>$request->prostor_drehi,
                   'spalno_belio_havlii'=>$request->spalno_belio_havlii,
                   'chehli'=>$request->chehli,
                   'kozmetika'=>$request->kozmetika,
                   'chadari_plaj'=>$request->chadari_plaj,
                   'toster'=>$request->toster,
                   'domakinski_pribori'=>$request->domakinski_pribori,
                   'prahosmukachka'=>$request->prahosmukachka,
                   'bilard'=>$request->bilard,
                   'tenis_na_masa'=>$request->tenis_na_masa,
                   'ohrana'=>$request->ohrana,
                   'videonabludenie'=>$request->videonabludenie
                   ]);

        $id=$apart->id;
        session()->put('id',$id);

        return redirect()->route('image');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apart = Apartment::find($id);

                $images = ApartmentImage::where('apart_id',$apart->id)->get();

                foreach($images as $image){
                    $image_name=$image->image;

                   unlink('images/'.$image_name);

                }
                $apart->delete();
                return redirect()->back();
    }
}
