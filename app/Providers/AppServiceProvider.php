<?php

namespace App\Providers;

use App\Http\Responsitories\CustomerResponsitoryInterface;
use App\Http\Responsitories\Eloquent\CustomerResponsitoryEloquent;
use App\Http\Services\CustomerServiceInterface;
use App\Http\Services\Imp\CustomerServiceImp;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CustomerResponsitoryInterface::class, CustomerResponsitoryEloquent::class);
        $this->app->singleton(CustomerServiceInterface::class, CustomerServiceImp::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
