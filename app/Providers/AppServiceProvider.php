<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
{
    // サーバー側でGoogle Cloud Speech-to-Text APIを使用するために、Google Cloud SDKの認証情報をセットする
    putenv('GOOGLE_APPLICATION_CREDENTIALS='.base_path().'/speech_api_key.json');
}
}
