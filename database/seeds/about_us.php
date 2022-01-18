<?php

use Illuminate\Database\Seeder;

class about_us extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $info=\App\Models\Info::create([
           'company_name'=>'Ammar For Travel',
           'place'=>'555 River Rd Ste 22',
           'mobile'=>'0483415239',
           'email'=>'Ammar_for_Travel@yahoo.come',
           'description'=>'Ammar copmany For Travel  holds The Tourism Ministry &quot;license No 1525&quot; 
                           and is a Member of the Egyptian Travel Agent Association (ETAA) to ensure your financial security;
                            we are experts in a wide selection of tourism services that are available in Egypt, as well as many
                             neighbor countries like Jordon, Syria and Turkey. Ammar Company offers high quality services tailored 
                             to suit all tourists&#039;  needs and interests. Our slogan is &quot;quality is our top priority.'

        	]);
    }
}
