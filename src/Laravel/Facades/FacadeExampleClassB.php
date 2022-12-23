<?php

namespace ExampleLibrary\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class FacadeExampleClassB extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'example_class_b'; // same as bind method in service provider
    }
}