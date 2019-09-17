<?php

use Illuminate\Database\Seeder;

use App\Sitesetting;

class SiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$settings=new Sitesetting;

    	$settings->save();
    }
}
