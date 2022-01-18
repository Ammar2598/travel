<?php

use Illuminate\Database\Seeder;

class category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $category=\App\Models\Category::create([
          'name'=>'tour',
          'meta_keywords'=>'great discovery or tourism or official  journey ',
          'meta_des'=>'great discovery journey'
        	]);
    }
}
