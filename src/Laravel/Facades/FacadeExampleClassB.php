<?php

namespace ExampleLibrary\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class FacadeExampleClassB extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ExampleClassB'; // same as bind method in service provider
    }
}
