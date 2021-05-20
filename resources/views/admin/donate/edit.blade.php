
<x-app-layout>
    <x-slot name="header">Bağış Güncelle</x-slot>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('donates.update', $donates->id) }}">
            @method('PUT')<!--GÜNCELLEME İÇİN PUT METHODU KULLANILIR-->
            @csrf<!--POST EDİYOR yoksa çalışmaz-->

                <div class="form-gruoup">
                    <label>Durum</label>
                    <select name="status" id="status" class="form-control">
                        <option> Durum Seçiniz </option>
                        <option value='draft'>Taslak</option>
                        <option value='publish'>Yayınla</option>
                        <option value='passive'>Pasif</option>
                    </select>

                    <br>

                </div>

                <div class="form-group">
                    <label>Bağış Başlığı</label>
                    <input type="text" name="title" class="form-control" value="{{ $donates->title }}"  >
                    <!--
                        old fonksiyonu girilen değeri hafızada tutarak bir hata verdiğinde sayfa yenilendiği
                        zaman daha önceden dışarıdan girilen veriyi ekrana getirir
                    -->
                </div>
                <div class="form-group">
                    <label>Hasta Adı ve Soyadı</label>
                    <input name="name" class="form-control" value="{{ $donates->name}}" >
                </div>

                <div class="form-group">
                    <label>Hastane</label>
                    <input name="hospital" class="form-control" value="{{  $donates->hospital }}" >
                </div>

                <div class="form-group">
                    <label>Bağış Açıklama</label>
                    <textarea name="description" class="form-control" rows="4" >{{ $donates->description }}</textarea>
                </div>

                <div class="form-group">
                    <label>İletişim</label>
                    <input type="text" name="contact" class="form-control" data-inputmask="'mask': '9999 9999 9999 9999'" value="{{$donates->contact }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger btn-sm btn-block" >Güncelle</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
