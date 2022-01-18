<?php

use Illuminate\Database\Seeder;

class destination extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$destinations=['Cairo','Alex','Aswan','Helwan'];
    	foreach ($destinations as  $destination) {
    		$destination=\App\Models\Destination::create([
          'name'=>$destination
        	]);
    	}
        
    }
}
