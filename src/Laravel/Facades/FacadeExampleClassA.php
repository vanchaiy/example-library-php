<?php

namespace ExampleLibrary\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class FacadeExampleClassA extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'example_class_a'; // same as bind method in service provider
    }
}