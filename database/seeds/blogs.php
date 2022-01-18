<?php

use Illuminate\Database\Seeder;

class blogs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog=\App\Models\Blog::create([
            'title'=>'Into',
            'content'=>'Welcome Everyone In Our Site',
            'user_name'=>'Admin'
        	]);
    }
}
