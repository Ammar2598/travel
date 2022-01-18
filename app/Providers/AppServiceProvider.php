<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Destination;
use App\Models\Journey;
use App\Models\Blog;
use App\Models\Info;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('categories',Category::get());
        view()->share('destinations',Destination::get());
        view()->share('journeys',Journey::get());
        view()->share('blogs',Blog::get());
        view()->share('infos',Info::get()->first());
        
    }
}
