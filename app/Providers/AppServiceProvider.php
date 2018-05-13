<?php

namespace App\Providers;

use App\Vegetable;
use Illuminate\Support\Facades\View;
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
        $vegetables = Vegetable::get();
        $vegetables = $vegetables->sortByDesc('created_at')->take(4);
        View::share(['vegetables' => $vegetables]);
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
