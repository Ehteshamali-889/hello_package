<?php

namespace YourVendorName\HelloPackage;

use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish the hello.php file to the Laravel views directory
        $this->publishes([
            __DIR__ . '/../resources/views/hello.php' => resource_path('views/hello.php'),
        ], 'views');
    }

    public function register()
    {
        // No need to register anything here for this simple example
    }
}
