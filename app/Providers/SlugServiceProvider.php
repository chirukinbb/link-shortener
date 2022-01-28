<?php

namespace App\Providers;

use App\Services\SlugService;
use Illuminate\Support\ServiceProvider;

class SlugServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('slug', SlugService::class);
    }
}
