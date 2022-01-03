<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
         'App\Http\Interfaces\EndUserInterface',
         'App\Http\Repositories\EndUserRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\AdminInterface',
            'App\Http\Repositories\FaqAdminRepository'
           );
           $this->app->bind(
            'App\Http\Interfaces\AdminInterface',
            'App\Http\Repositories\ActivityAdminRepository'
           );
           $this->app->bind(
            'App\Http\Interfaces\AdminInterface',
            'App\Http\Repositories\CourseAdminRepository'
           );
           $this->app->bind(
            'App\Http\Interfaces\AdminInterface',
            'App\Http\Repositories\TeacherAdminRepository'
           );
           $this->app->bind(
            'App\Http\Interfaces\AdminInterface',
            'App\Http\Repositories\SliderAdminRepository'
           );
           $this->app->bind(
            'App\Http\Interfaces\ContactInterface',
            'App\Http\Repositories\ContactAdminRepository'
           );
           $this->app->bind(
            'App\Http\Interfaces\HomeInterface',
            'App\Http\Repositories\HomeAdminRepository'
           );
           $this->app->bind(
            'App\Http\Interfaces\AuthInterface',
            'App\Http\Repositories\AuthAdminRepository'
           );
           
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
