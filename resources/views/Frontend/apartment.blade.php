@extends('Frontend.layouts.master')

@section('content')
    <div class="container" style="margin-bottom: 30px;">
        <div class="row">
            <div class="col-md-8 offset-lg-2">
                <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
                    <div class="carousel-inner">
                        @foreach($apartment->images as $key=>$images)

                        <div class="carousel-item {{$key == 1 ? 'active' : '' }}">
                            <img class="w-100 d-block" src="{{asset('/images/').'/'.$images->image}}"
                                 style="height: 600px" alt="Slide Image">
                        </div>
                        @endforeach

                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev" >
                            <span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a>

                        <a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next" >
                            <span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a>
                    </div>
                    <ol class="carousel-indicators">
                        @foreach($image_keys as $img_key)
                            @if($img_key == 0)
                                <li data-bs-target="#carousel-1" data-bs-slide-to="{{$img_key}}" class="active"></li>
                            @else
                                <li data-bs-target="#carousel-1" data-bs-slide-to="{{$img_key}}"></li>
                            @endif
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-bottom: 30px;">
        <div class="row">
            <div class="col-md-8 col-lg-7">
                <div class="float-end" style="background: #cccccc;margin: 5px;padding: 5px;border-radius: 5px;opacity: 0.80;">
                    <h3 class="text-center"><strong>{{$apartment->apart_name}}</strong></h3>
                    <p style="padding-left: 10px;">{!! $apartment->desc_long !!}</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-5"><div style="background: #cccccc;border-radius: 5px;border-top-left-radius: 5px;margin: 5px;padding: 5px;opacity: 0.80;">
                    <h3 style="text-align: center;"><strong>Удобства в {{$apartment->apart_name}}</strong><br /></h3>
                    <ul>
                        @if($apartment->extras->parking == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->parking_code}}"
                                      data-width="25" data-height="25"></span> Паркинг</li>
                        @endif
                        @if($apartment->extras->restorant == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->restorant_code}}"
                            data-width="25" data-height="25"></span> Ресторант</li>
                        @endif
                        @if($apartment->extras->wifi == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->wifi_code}}"
                            data-width="25" data-height="25"></span> WiFi</li>
                        @endif
                        @if($apartment->extras->otkrit_basein_vazrstni == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->otkrit_basein_vazrstni_code}}"
                                      data-width="25" data-height="25"></span> Открит басейн за възрастни</li>
                        @endif
                        @if($apartment->extras->otkrit_basein_deca == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->otkrit_basein_deca_code}}"
                                      data-width="25" data-height="25"></span> Открит басейн за деца</li>
                        @endif
                        @if($apartment->extras->shezlongi == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->shezlongi_code}}"
                                      data-width="25" data-height="25"></span> Шезлонги</li>
                        @endif
                        @if($apartment->extras->chadari == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->chadari_code}}"
                                      data-width="25" data-height="25"></span> Чадъри</li>
                        @endif
                        @if($apartment->extras->vanshna_gradina == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->vanshna_gradina_code}}"
                                      data-width="25" data-height="25"></span> Външна градина</li>
                        @endif
                        @if($apartment->extras->jakuzi == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->jakuzi_code}}"
                                      data-width="25" data-height="25"></span> Джакузи</li>
                        @endif
                        @if($apartment->extras->detski_kat == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->detski_kat_code}}"
                                      data-width="25" data-height="25"></span> Детски кът</li>
                        @endif
                        @if($apartment->extras->fitness == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->fitness_code}}"
                                      data-width="25" data-height="25"></span> Фитнес</li>
                        @endif
                        @if($apartment->extras->banq_toaletna == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->banq_toaletna_code}}"
                                      data-width="25" data-height="25"></span> Баня с тоалетна</li>
                        @endif
                        @if($apartment->extras->dush_kabina == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->dush_kabina_code}}"
                                      data-width="25" data-height="25"></span> Душ кабина</li>
                        @endif
                        @if($apartment->extras->peralnq == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->peralnq_code}}"
                                      data-width="25" data-height="25"></span> Пералня</li>
                        @endif
                        @if($apartment->extras->klimatik == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->klimatik_code}}"
                                      data-width="25" data-height="25"></span> Климатик</li>
                        @endif
                        @if($apartment->extras->hladilnik == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->hladilnik_code}}"
                                      data-width="25" data-height="25"></span> Хладилник</li>
                        @endif
                        @if($apartment->extras->mini_bar == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->mini_bar_code}}"
                                      data-width="25" data-height="25"></span> Мини бар</li>
                        @endif
                        @if($apartment->extras->kotloni == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->kotloni_code}}"
                                      data-width="25" data-height="25"></span> Котлони</li>
                        @endif
                        @if($apartment->extras->absorbator == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->absorbator_code}}"
                                      data-width="25" data-height="25"></span> Абсорбатор</li>
                        @endif
                        @if($apartment->extras->gotvarska_pechka == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->gotvarska_pechka_code}}"
                                      data-width="25" data-height="25"></span> Готварска печка</li>
                        @endif
                        @if($apartment->extras->mikrovalnova == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->mikrovalnova_code}}"
                                      data-width="25" data-height="25"></span> Микровълнова печка</li>
                        @endif
                        @if($apartment->extras->kana_topla_voda == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->kana_topla_voda_code}}"
                                      data-width="25" data-height="25"></span> Кана за топла вода</li>
                        @endif
                        @if($apartment->extras->kafemashina == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->kafemashina_code}}"
                                      data-width="25" data-height="25"></span> Кафемашина</li>
                        @endif
                        @if($apartment->extras->LCD_tv == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->LCD_tv_code}}"
                                      data-width="25" data-height="25"></span> LCD-телевизор</li>
                        @endif
                        @if($apartment->extras->terasa_vanshni_mebeli == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->terasa_vanshni_mebeli_code}}"
                                      data-width="25" data-height="25"></span> Тераса с външни мебели</li>
                        @endif
                        @if($apartment->extras->izgled == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->izgled_code}}"
                                      data-width="25" data-height="25"></span> Изглед</li>
                        @endif
                        @if($apartment->extras->kuhnenski_boks == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->kuhnenski_boks_code}}"
                                      data-width="25" data-height="25"></span> Кухненски бокс</li>
                        @endif
                        @if($apartment->extras->garderob == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->garderob_code}}"
                                      data-width="25" data-height="25"></span> Гардероб</li>
                        @endif
                        @if($apartment->extras->ogledalo == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->ogledalo_code}}"
                                      data-width="25" data-height="25"></span> Огледало</li>
                        @endif
                        @if($apartment->extras->skrin == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->skrin_code}}"
                                      data-width="25" data-height="25"></span> Скрин</li>
                        @endif
                        @if($apartment->extras->noshtna_lampa == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->noshtna_lampa_code}}"
                                      data-width="25" data-height="25"></span> Нощна лампа</li>
                        @endif
                        @if($apartment->extras->noshtni_shkafcheta == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->noshtni_shkafcheta_code}}"
                                      data-width="25" data-height="25"></span> Нощни шкафчета</li>
                        @endif
                        @if($apartment->extras->spalnq == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->spalnq_code}}"
                                      data-width="25" data-height="25"></span> Спалня</li>
                        @endif
                        @if($apartment->extras->detska_koshara == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->detska_koshara_code}}"
                                      data-width="25" data-height="25"></span> Детска кошара</li>
                        @endif
                        @if($apartment->extras->detsko_stolche_hranene == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->detsko_stolche_hranene_code}}"
                                      data-width="25" data-height="25"></span> Детско столче за хранене</li>
                        @endif
                        @if($apartment->extras->mekamebel == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->mekamebel_code}}"
                                      data-width="25" data-height="25"></span> Мека мебел</li>
                        @endif
                        @if($apartment->extras->kat_za_hranene == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->kat_za_hranene_code}}"
                                      data-width="25" data-height="25"></span> Кът за хранене</li>
                        @endif
                        @if($apartment->extras->kat_za_sqdane == 1)
                            <li><span class="iconify" data-icon="mdi:sofa-outline"
                                      data-width="25" data-height="25"></span> Кът за сядане</li>
                        @endif
                        @if($apartment->extras->dostap_invalidi == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->dostap_invalidi_code}}"
                                      data-width="25" data-height="25"></span> Достъп за инвалиди</li>
                        @endif
                        @if($apartment->extras->asansior == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->asansior_code}}"
                                      data-width="25" data-height="25"></span> Асансьор</li>
                        @endif
                        @if($apartment->extras->seshoar == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->seshoar_code}}"
                                      data-width="25" data-height="25"></span> Сешоар</li>
                        @endif
                        @if($apartment->extras->daska_utia == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->daska_utia_code}}"
                                      data-width="25" data-height="25"></span> Дъска с ютия</li>
                        @endif
                        @if($apartment->extras->sushilnik_drehi == 1)
                            <li><span class="iconify" data-icon="icon-park:clothes-short-sleeve"
                                      data-width="25" data-height="25"></span> Сушилня за дрехи</li>
                        @endif
                        @if($apartment->extras->prostor_drehi == 1)
                            <li><span class="iconify" data-icon="icon-park:clothes-short-sleeve"
                                      data-width="25" data-height="25"></span> Простор за дрехи</li>
                        @endif
                        @if($apartment->extras->spalno_belio_havlii == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->spalno_belio_havlii_code}}"
                                      data-width="25" data-height="25"></span> Спално бельо и хавлиени кърпи</li>
                        @endif
                        @if($apartment->extras->chehli == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->chehli_code}}"
                                      data-width="25" data-height="25"></span> Чехли</li>
                        @endif
                        @if($apartment->extras->kozmetika == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->kozmetika_code}}"
                                      data-width="25" data-height="25"></span> Козметика</li>
                        @endif
                        @if($apartment->extras->chadari_plaj == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->chadari_plaj_code}}"
                                      data-width="25" data-height="25"></span> Чадъри за плаж</li>
                        @endif
                        @if($apartment->extras->toster == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->toster_code}}"
                                      data-width="25" data-height="25"></span> Тостер</li>
                        @endif
                        @if($apartment->extras->domakinski_pribori == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->domakinski_pribori_code}}"
                                      data-width="25" data-height="25"></span> Домакински прибори</li>
                        @endif
                        @if($apartment->extras->prahosmukachka == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->prahosmukachka_code}}"
                                      data-width="25" data-height="25"></span> Прахосмукачка</li>
                        @endif
                        @if($apartment->extras->bilard == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->bilard_code}}"
                                      data-width="25" data-height="25"></span> Билярд</li>
                        @endif
                        @if($apartment->extras->tenis_na_masa == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->tenis_na_masa_code}}"
                                      data-width="25" data-height="25"></span> Тенис на маса</li>
                        @endif
                        @if($apartment->extras->ohrana == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->ohrana_code}}"
                                      data-width="25" data-height="25"></span> Охрана</li>
                        @endif
                        @if($apartment->extras->videonabludenie == 1)
                            <li><span class="iconify" data-icon="{{$code_extra->videonabludenie_code}}"
                                      data-width="25" data-height="25"></span> Видеонаблюдение</li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-bottom: 30px;">
        <div class="row">
            <div class="col">
                <div class="float-end"
                     style="background: #cccccc;margin: 5px;padding: 5px;border-radius: 5px;opacity: 0.80;">
                    <h3 class="text-center"><strong>Свободни дати</strong></h3>
                    <p style="padding-left: 10px;">Календар за наличност</p>
                    <div id="calendar-range">
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script>
            var events = {!! json_encode($events) !!};

            events.forEach(function(part, index) {
                part.start = new Date(part.start.replace(/-/g, ',')) ;
                part.end = new Date(part.end.replace(/-/g, ',')) ;
            });
            var ranges  = events;

            $(function () {
                $("#calendar-range").datepicker({
                    numberOfMonths: 1,
                    beforeShowDay: function (date) {
                        for (var i = 0; i < ranges.length; i++) {
                            if (date >= ranges[i].start && date <= ranges[i].end) return [false, ''];
                        }
                        return [true, ''];
                    },
                });
            });
        </script>

@endsection