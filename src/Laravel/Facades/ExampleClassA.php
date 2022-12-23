<?php

namespace ExampleLibrary\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class ExampleClassA extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ExampleClassA'; // same as bind method in service provider
    }
}