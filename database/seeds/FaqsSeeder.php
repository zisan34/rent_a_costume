<?php

use Illuminate\Database\Seeder;

use App\Faq;

class FaqsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faqs=[[1,'How to purchase Products','just buy it'],[2,'how to trust brands','just do it'],[3,'how to checkout','just do it']];

        for($i=0;$i<3;$i++) {
        	Faq::create([
        		'faq_category_id'=>$faqs[$i][0],
        		'question'=>$faqs[$i][1],
        		'answer'=>$faqs[$i][2]
        	]);
        }
    }
}
