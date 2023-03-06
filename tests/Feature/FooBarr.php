<?php

namespace Tests\Feature;

use App\data\Bar;
use App\data\Foo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FooBarr extends TestCase
{

    public function test_fooBarr()
    {
        $foo=new foo();
        $bar= new bar($foo);


        self::assertEquals("foo",$foo->foo());
        self::assertEquals("foo and Bar",$bar->bar());
    }

    public function singleToonTest(){

        $foo=new foo();
        $bar=new bar($foo);

        $bar->jajal([
        ]);
    }

}
