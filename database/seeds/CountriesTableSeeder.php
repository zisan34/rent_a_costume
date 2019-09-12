<?php

use Illuminate\Database\Seeder;

use App\Country;
use App\City;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cnt1=Country::create([
        	'country'=>'Bangladesh']);

        $cnt2=Country::create([
        	'country'=>'India']);

        $cnt3=Country::create([
        	'country'=>'America']);



        $city11=City::create([
        	'country_id'=>$cnt1->id,
        	'city'=>'Dhaka']);

        $city12=City::create([
        	'country_id'=>$cnt1->id,
        	'city'=>'Comilla']);
        $city13=City::create([
        	'country_id'=>$cnt1->id,
        	'city'=>'Chittagong']);



        $city21=City::create([
        	'country_id'=>$cnt2->id,
        	'city'=>'Delhi']);

        $city22=City::create([
        	'country_id'=>$cnt2->id,
        	'city'=>'Kalkutta']);
        $city23=City::create([
        	'country_id'=>$cnt2->id,
        	'city'=>'Mombai']);


        $city31=City::create([
        	'country_id'=>$cnt3->id,
        	'city'=>'New York']);

        $city32=City::create([
        	'country_id'=>$cnt3->id,
        	'city'=>'Washington DC']);
        $city33=City::create([
        	'country_id'=>$cnt3->id,
        	'city'=>'San Fransisco']);

    }
}
