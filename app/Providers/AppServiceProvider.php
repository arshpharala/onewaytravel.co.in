<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

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
        Relation::morphMap([
            'serviceCategory' => 'App\Models\Category',
            'serviceLocation'    => 'App\Models\Topic',
            'service'   => 'App\Models\Course',
            'article'  => 'App\Models\Article',
            
        ]);
    }
}
