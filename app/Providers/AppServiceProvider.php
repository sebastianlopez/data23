<?php

namespace App\Providers;

use App\Models\Configsite;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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

        View::composer(['*'],
        function ($view) {
            $configs = Configsite::where('lang',
                get_lang())->pluck('value', 'name');

                // \Log::info('**** app -> providers -> AppServiceProvideer.php - Step 1');

                // \Log::info(print_r($configs,true));

            $view->with('site', $configs);
        }
    );
        Paginator::useBootstrap();
    }
}
