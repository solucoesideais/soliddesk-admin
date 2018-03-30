<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    const MYSQL_5_6_STRING_KEY_LENGTH = 191;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->forceMysqlKeyLength();
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

    /**
     * Mysql 5.6 uses a smaller key than Mysql 5.7
     * read more on: https://laravel-news.com/laravel-5-4-key-too-long-error
     */
    private function forceMysqlKeyLength()
    {
        Schema::defaultStringLength(self::MYSQL_5_6_STRING_KEY_LENGTH);
    }
}
