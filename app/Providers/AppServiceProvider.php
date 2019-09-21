<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;
use View;

use App\SiteSetting;
use App\ProductCategory;
use App\Brand;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('user', \Auth::user());
        Schema::defaultStringLength(191);
        view()->share('siteSettings', SiteSetting::first());
        view()->share('all_category', ProductCategory::orderBy('updated_at','desc')->get());
        view()->share('all_brands', Brand::orderBy('updated_at','desc')->get());
    }
}
