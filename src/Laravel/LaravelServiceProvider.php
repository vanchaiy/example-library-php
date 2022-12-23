<?php

namespace ExampleLibrary\Laravel;

use Illuminate\Support\ServiceProvider;
use ExampleLibrary\ClassA;
use ExampleLibrary\ClassB;

class LaravelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerPublishables();
    }
    
    public function register()
    {
        $this->app->bind('ExampleClassA', function () {
            $exampleA = config('example.exampleA');
            return new ClassA([
                "exampleA" => $exampleA,
            ]);
        });

        $this->app->bind('ExampleClassB', function () {
            $exampleB = config('example.exampleB');
            return new ClassB([
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
