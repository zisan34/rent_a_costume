<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $u1=User::create([
        	'name'=>'Admin1',
        	'email'=>'admin1@rent.com',
        	'phone'=>'1234',
        	'country_id'=>'1',
        	'city_id'=>'3',
        	'gender'=>'female',
        	'is_super_admin'=>'1',
        	'password'=>Hash::make('123456789')
        ]);

        $u2=User::create([
        	'name'=>'Admin2',
        	'email'=>'admin2@rent.com',
        	'phone'=>'1234',
        	'country_id'=>'2',
        	'city_id'=>'5',
        	'gender'=>'male',
        	'is_super_admin'=>'1',
        	'password'=>Hash::make('123456789')
        ]);
    }
}
