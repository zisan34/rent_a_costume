<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
<<<<<<< HEAD
         $this->call(CountriesTableSeeder::class);
         $this->call(EventsTableSeeder::class);
       // $this->call(ProductsTableSeeder::class);
=======
        // $this->call(CountriesTableSeeder::class);
        // $this->call(EventsTableSeeder::class);
        // $this->call(SiteSettingsSeeder::class);
        $this->call(FaqCategoriesSeeder::class);
        
>>>>>>> d0e6ac936e723e1477e47d9b78b5633738b3b981
    }
}
