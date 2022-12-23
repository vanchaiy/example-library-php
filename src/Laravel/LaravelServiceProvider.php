<?php

namespace ExampleLibrary\Laravel;

use Illuminate\Support\ServiceProvider;
use ExampleLibrary\ExampleClassA;
use ExampleLibrary\ExampleClassB;

class LaravelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerPublishables();
    }
    
    public function register()
    {
        $this->app->bind('facadeexampleclassa', function () {
            $exampleA = config('example.exampleA');
            return new ExampleClassA([
                "exampleA" => $exampleA,
            ]);
        });

        $this->app->bind('facadeexampleclassb', function () {
            $exampleB = config('example.exampleB');
            return new ExampleClassA([
                "exampleA" => $exampleB,
            ]);
        });
        
        $this->mergeConfigFrom(__DIR__ . '/LaravelPublishConfig.php', 'example');
    }

    protected function registerPublishables(): void
    {
        $this->publishes([
            __DIR__ . '/LaravelPublishConfig.php' => config_path('example.php'),
        ], 'config');
    }
}
