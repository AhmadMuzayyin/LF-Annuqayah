<?php

namespace App\Providers;

use App\Models\CourseCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('course.*', function ($view) {
            $categories = CourseCategory::all();
            $view->with('categories', $categories);
        });
    }
}
