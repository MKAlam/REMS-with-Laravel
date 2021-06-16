<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Country;
use App\State;
use App\City;
use App\CountryPhoneCode;
use Database\Seeds\CountryCityStateHelper;


class CountryCityStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = CountryCityStateHelper::countries();
        foreach ($countries as $country) {
            Country::firstOrCreate($country);
        }

        $states = CountryCityStateHelper::states();
        foreach ($states as $state) {
            State::firstOrCreate($state);
        }

        $cities = CountryCityStateHelper::cities();
        foreach ($cities as $city) {
            City::firstOrCreate($city);
        }

        $codes = CountryCityStateHelper::phoneCodes();
        foreach ($codes as $code) {
            CountryPhoneCode::create($code);
        }
    }
}
