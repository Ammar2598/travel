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
         $this->call(users::class);
         $this->call(destination::class);
         $this->call(category::class);
         $this->call(blogs::class);
         $this->call(about_us::class);
         
    }
}
