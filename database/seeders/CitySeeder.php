<?php

namespace Database\Seeders;
use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $cities=['Adana','Adıyaman','Afyon','Ağrı','Amasya','Ankara','Antalya','Artvin','Aydın','Balıkesir'
        ,'Bilecik','Bingöl','Bitlis','Bolu','Burdur','Bursa','Çanakkale','Çankırı','Çorum','Denizli','Diyarbakır'
        ,'Edirne','Elazığ','Erzincan','Erzurum','Eskişehir','Gaziantep','Giresun','Gümüşhane','Hakkari','Hatay'
        ,'Isparta','Mersin','İstanbul','İzmir','Kars','Kastamonu','Kayseri','Kırklareli','Kırşehir','Kocaeli','Konya'
        ,'Kütahya','Malatya','Manisa','KahramanMaraş','Mardin','Muğla','Muş'
        ,'Nevşehir','Niğde','Ordu','Rize','Sakarya','Samsun','Siirt','Sinop','Sivas'
        ,'Tekirdağ','Tokat','Trabzon','Tunceli','Şanlıurfa','Uşak','Van','Yozgat','Zonguldak'
        ,'Aksaray','Bayburt','Karaman','Kırıkkale','Batman','Şırnak','Bartın','Ardahan','Iğdır'
        ,'Yalova','Karabük','Kilis','Osmaniye','Düzce'
    ];


        //$cities = array('bursa'=>'1','ankara' => '2');

            foreach ($cities as $key => $value) {

                //City::insert($v);
                City::factory(1)->create([
                    'city_name'=>$value,
                ]);

            }

        //City::insert($cities);

        //City::factory(10)->create();
    }
}
