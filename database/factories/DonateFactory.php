<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Donate;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class DonateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Donate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $blood = ['A+', 'A-', 'Ab+', 'Ab-', 'B+', 'B-', '0+', '0-'];
        $stat = ['publish', 'draft', 'passive'];
        $city = City::inRandomOrder()->first();
        $title =$this->faker->title(rand(3, 7));
        return [
            'title' => $title,
            'description' => $this->faker->text(200),
            'slug' => Str::slug($title),
            'city_id' => $city->id,
            'contact' => $this->faker->numberBetween(5300000000, 5400000000),
            'hospital' => $this->faker->company,
            'blood_type' => $blood[rand(0, 7)],
            //'status'=>$stat[rand(0,3)],
        ];
    }
}
