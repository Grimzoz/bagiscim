<?php

namespace Database\Seeders;

//use App\Models\Donate;
use App\Models\Donate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Donate::factory(10)->create();
    }
}
