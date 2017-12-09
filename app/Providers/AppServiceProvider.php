<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        //View::share('name','Habib');
        View::composer('FrontEnd.includes.menu',function($view){
          $publishCategories= Category::where('publication_status',1)->get();
          $view->with('publishCategories', $publishCategories);

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
