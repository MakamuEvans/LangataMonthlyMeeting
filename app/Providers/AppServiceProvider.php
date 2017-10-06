<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Sermon;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $themeYear= Sermon::where('type', 'Yearly Theme')->where('period', date('Y'))->first();
        $themeMonth= Sermon::where('type', 'Monthly Theme')->where('period', date('F Y'))->first();
        $quote = Sermon::where('type', 'Quote')->first();
        $sermonsFooter = Sermon::where('type', 'Service')->orderBy('id', 'desc')->take(5)->get();

        View::share('themeYear', $themeYear);
        View::share('themeMonth', $themeMonth);
        View::share('quote', $quote);
        View::share('sermonFooter', $sermonsFooter);
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
