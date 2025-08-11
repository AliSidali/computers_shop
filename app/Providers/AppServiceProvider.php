<?php

namespace App\Providers;

use App\Http\Enums\LanguageEnum;
use File;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Vite::prefetch(concurrency: 3);
        // dd(LanguageEnum::toArray());

        Inertia::share([

            'translations' => function () {
                $language_path = resource_path('../lang/' . app()->getLocale());
                $files = File::files($language_path);
                return require $files[0]->getRealPath();
            }
        ]);


    }
}
