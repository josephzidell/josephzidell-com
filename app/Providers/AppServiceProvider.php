<?php

namespace App\Providers;

use App\Business;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $pages = [
            'about'     => 'About',
            'portfolio' => 'Portfolio / Testimonials',
            'process'   => 'My Process',
            'benefit'   => 'Benefits',
            'contact'   => 'Contact',
        ];
        $logos = [
            'baishaknesses',
            'baltimoretorah',
            'citiwaste',
            'denbrook',
            'hebrewbooks',
            'grantwatch',
            // 'elleremodeling',
            'energyilluminated',
            'incapgroup',
            'msopher',
            'hamrolist',
            'denveralumni',
            // 'ofishel',
            // 'rentalsofdistinction.png'
        ];
        // $allBusinesses = Business::all();

        view()->share('pages', $pages);
        view()->share('logos', $logos);
        view()->share('allBusinesses', $allBusinesses);
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
