@extends('Admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <h3 class="text-dark mb-0">Create object</h3>
        </div>
        <form method="POST" action="{{route('apartments.store')}}">
            @csrf
            <div class="row">
                <div class="col"><label class="form-label">Name</label>
                    <input class="form-control" type="text" name="apart_name" placeholder="(пример) VSG Garden"
                class="@error('apart_name') is-invalid @enderror" value="{{ old('apart_name') }}" ></div>

                @error('apart_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="col"><label class="form-label">Address</label>
                    <input class="form-control" type="text" name="address" placeholder="(пример)  с.Равда ул.Вардар 10 А, Равда, България, 8238"
                           class="@error('address') is-invalid @enderror" value="{{ old('address') }}" ></div>

                @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="col"><label class="form-label">Description short</label>
                    <textarea class="form-control" name="desc_short"  id="editor1"
                        class="@error('desc_short') is-invalid @enderror"
                                {{ old('desc_short') }}>
                    </textarea></div>
                @error('desc_short')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="col"><label class="form-label">Description&nbsp;</label>
                    <textarea class="form-control" name="desc_long" id="editor2"
                        class="@error('desc_long') is-invalid @enderror"
                                {{ old('desc_long') }}>
                    </textarea></div>
                @error('desc_long')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="parking" name="parking"
                               value="1"
                                {{ old('parking') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-1">Паркинг</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="restorant" name="restorant"
                               value="1"
                                {{ old('restorant') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-12">Ресторант</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="wifi" name="wifi"
                               value="1"
                                {{ old('wifi') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-11">Wifi</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="otkrit_basein_vazrstni" name="otkrit_basein_vazrstni"
                               value="1"
                                {{ old('otkrit_basein_vazrstni') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-10">Открит басейн за възрастни</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="otkrit_basein_deca" name="otkrit_basein_deca"
                               value="1"
                                {{ old('otkrit_basein_deca') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-9">Открит басейн за деца</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="shezlongi" name="shezlongi"
                               value="1"
                                {{ old('shezlongi') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-8">Шезлонги</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="chadari" name="chadari"
                               value="1"
                                {{ old('chadari') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-7">Чадъри</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="vanshna_gradina" name="vanshna_gradina"
                               value="1"
                                {{ old('vanshna_gradina') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-6">Външна градина</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="jakuzi" name="jakuzi"
                               value="1"
                                {{ old('jakuzi') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-5">Джакузи</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="detski_kat" name="detski_kat"
                               value="1"
                                {{ old('detski_kat') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-4">Детски кът</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="fitness" name="fitness"
                               value="1"
                                {{ old('fitness') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-3">Фитнес</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="banq_toaletna" name="banq_toaletna"
                               value="1"
                                {{ old('banq_toaletna') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-2">Баня с тоалетна</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="dush_kabina" name="dush_kabina"
                               value="1"
                                {{ old('dush_kabina') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-14">Душ-Душ кабина</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="peralnq" name="peralnq"
                               value="1"
                                {{ old('peralnq') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-13">Пералня</label></div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="klimatik" name="klimatik"
                               value="1"
                                {{ old('klimatik') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-43">Климатик</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="hladilnik" name="hladilnik"
                               value="1"
                                {{ old('hladilnik') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-44">Хладилник</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="mini_bar" name="mini_bar"
                               value="1"
                                {{ old('mini_bar') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-45">Мини бар</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kotloni" name="kotloni"
                               value="1"
                                {{ old('kotloni') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-46">Котлони</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="absorbator" name="absorbator"
                               value="1"
                                {{ old('absorbator') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-47">Абсорбатор</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gotvarska_pechka" name="gotvarska_pechka"
                               value="1"
                                {{ old('gotvarska_pechka') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-48">Готварска печка</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="mikrovalnova" name="mikrovalnova"
                               value="1"
                                {{ old('mikrovalnova') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-49">Микровълнова</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kana_topla_voda" name="kana_topla_voda"
                               value="1"
                                {{ old('kana_topla_voda') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-50">Кана за топла вода</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kafemashina" name="kafemashina"
                               value="1"
                                {{ old('kafemashina') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-51">Кафе машина</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="LCD_tv" name="LCD_tv"
                               value="1"
                                {{ old('LCD_tv') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-52">LCD Телевизор</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="terasa_vanshni_mebeli" name="terasa_vanshni_mebeli"
                               value="1"
                                {{ old('terasa_vanshni_mebeli') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-53">Тераса-Тераса с външни мебели</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="izgled" name="izgled"
                               value="1"
                                {{ old('izgled') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-54">Изглед</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kuhnenski_boks" name="kuhnenski_boks"
                               value="1"
                                {{ old('kuhnenski_boks') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-55">Кухня-Кухненски бокс</label></div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="garderob" name="garderob"
                               value="1"
                                {{ old('garderob') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-29">Гардероб</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="ogledalo" name="ogledalo"
                               value="1"
                                {{ old('ogledalo') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-30">Огледало</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="skrin" name="skrin"
                               value="1"
                                {{ old('skrin') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-31">Скрин</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="noshtna_lampa" name="noshtna_lampa"
                               value="1"
                                {{ old('noshtna_lampa') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-31">Нощна лампа</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="noshtni_shkafcheta" name="noshtni_shkafcheta"
                               value="1"
                                {{ old('noshtni_shkafcheta') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-32">Нощни шкафчета</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="spalnq" name="spalnq"
                               value="1"
                                {{ old('spalnq') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-33">Спалня</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="detska_koshara" name="detska_koshara"
                               value="1"
                                {{ old('detska_koshara') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-34">Детска кошара</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="detsko_stolche_hranene" name="detsko_stolche_hranene"
                               value="1"
                                {{ old('detsko_stolche_hranene') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-34">Детско столче за хранене</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="mekamebel" name="mekamebel"
                               value="1"
                                {{ old('mekamebel') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-35">Мека мебел/диван разтегателен</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kat_za_hranene" name="kat_za_hranene"
                               value="1"
                                {{ old('kat_za_hranene') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-36">Кът за хранене</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kat_za_sqdane" name="kat_za_sqdane"
                               value="1"
                                {{ old('kat_za_sqdane') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-37">Кът за сядане</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="dostap_invalidi" name="dostap_invalidi"
                               value="1"
                                {{ old('dostap_invalidi') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-38">Достъп инвалиди</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="asansior" name="asansior"
                               value="1"
                                {{ old('asansior') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-39">Асансьор</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="seshoar" name="seshoar"
                               value="1"
                                {{ old('seshoar') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-40">Сешоар</label></div>

                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="daska_utia" name="daska_utia"
                               value="1"
                                {{ old('daska_utia') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-41">Дъска и ютия за гладене</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="sushilnik_drehi" name="sushilnik_drehi"
                               value="1"
                                {{ old('sushilnik_drehi') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-15">Сушилник за дрехи</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="prostor_drehi" name="prostor_drehi"
                               value="1"
                                {{ old('prostor_drehi') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-16">Простор за дрехи</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="spalno_belio_havlii" name="spalno_belio_havlii"
                               value="1"
                                {{ old('spalno_belio_havlii') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-17">Спално бельо и хавлии</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="chehli" name="chehli"
                               value="1"
                                {{ old('chehli') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-18">Чехли</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kozmetika" name="kozmetika"
                               value="1"
                                {{ old('kozmetika') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-19">Козметика</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="chadari_plaj" name="chadari_plaj"
                               value="1"
                                {{ old('chadari_plaj') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-20">Чадъри за плаж</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="toster" name="toster"
                               value="1"
                                {{ old('toster') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-21">Тостер</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="domakinski_pribori" name="domakinski_pribori"
                               value="1"
                                {{ old('domakinski_pribori') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-22">Домакински прибори</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="prahosmukachka" name="prahosmukachka"
                               value="1"
                                {{ old('prahosmukachka') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-23">Прахосмукачка</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="bilard" name="bilard"
                               value="1"
                                {{ old('bilard') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-24">Билярд</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="tenis_na_masa" name="tenis_na_masa"
                               value="1"
                                {{ old('tenis_na_masa') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-25">Тенис на маса</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="ohrana" name="ohrana"
                               value="1"
                                {{ old('ohrana') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-26">Охрана</label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="videonabludenie" name="videonabludenie"
                               value="1"
                                {{ old('videonabludenie') =="1" ? 'checked' : ''}}>
                        <label class="form-check-label" for="formCheck-27">Видеонаблюдение</label></div>
                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
    </div>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor1' ) )
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#editor2' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection