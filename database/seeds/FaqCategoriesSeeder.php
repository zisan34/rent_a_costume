<?php

use Illuminate\Database\Seeder;

use App\FaqCategory;

class FaqCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faqCategories=['Products','Brands','Website'];

        foreach ($faqCategories as $category) {
        	$faqCategory=FaqCategory::create([
        		'title'=>$category,
        		'description'=>'Frequently asked questions about'.$category,
        		'status'=>1
        	]);
        }
    }
}
