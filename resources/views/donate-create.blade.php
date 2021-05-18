<?php
use App\Models\City;
//$city = City::all();
$city = City::get();

?>

<x-app-layout>
    <x-slot name="header">Bağış Oluştur</x-slot>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('bagis.store')}}">
                @csrf <!--POST EDİYOR yoksa çalışmaz-->
                <div class="form-group">
                    <label>Bağış Başlığı</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}"  >
                    <!--
                        old fonksiyonu girilen değeri hafızada tutarak bir hata verdiğinde sayfa yenilendiği
                        zaman daha önceden dışarıdan girilen veriyi ekrana getirir
                    -->
                </div>

                <div class="form-group">
                    <label>Kan Grubu</label>
                    <br>
                    <input type="radio" name="blood_type" value="A+">A+
                    <input type="radio" name="blood_type" value="A-">A-
                    <input type="radio" name="blood_type" value="B+">B+
                    <input type="radio" name="blood_type" value="B-">B-
                    <input type="radio" name="blood_type" value="AB+">AB+
                    <input type="radio" name="blood_type" value="AB-">AB-
                    <input type="radio" name="blood_type" value="0+">0+
                    <input type="radio" name="blood_type" value="0-">0-
                </div>

                
        
                <div class="form-gruoup">
                    <select name="city_id" id="city_id" class="form-control">
                    <option> Şehir Seçiniz </option>
                        @foreach ($city as $cities)
                            <option value='{{ $cities->id }}'>{{ $cities->city_name }}</option>
                        @endforeach

                    </select>    
    
                </select>
                <br>

                </div>

                <div class="form-group">
                    <label>Hastane</label>
                    <input name="hospital" class="form-control" value="{{ old('hospital') }}" >
                </div>

                <div class="form-group">
                    <label>Bağış Açıklama</label>
                    <textarea name="description" class="form-control" rows="4" >{{ old('description') }}</textarea>
                </div>

                <div class="form-group">
                    <label>İletişim</label>
                    <input type="text" name="contact" class="form-control" data-inputmask="'mask': '9999 9999 9999 9999'" value="{{ old('contact') }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger btn-sm btn-block" >Bağış Oluştur</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
