<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=\App\Models\User::create([
        'name'=>'admin',
         'group'=>'admin',
         'email'=>'admin@yahoo.com',
         'password'=>bcrypt('12345678'),

        ]);
    }
}
