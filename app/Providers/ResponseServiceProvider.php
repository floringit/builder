<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class ResponseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('api', function ($data, $message = '', $status = 200) {

            $customFormat = [
                'message' => $message,
                'data' => $data
            ];
            return Response::json($customFormat, $status);
        });

        Response::macro('apiError', function ($code, $message = '', $status = 400, $data = null) {

            $customFormat = [
                'error' => $code,
                'message' => $message,
                'data' => $data
            ];
            return Response::json($customFormat, $status);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
