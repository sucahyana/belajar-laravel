<?php

namespace App\data;

class Bar
{
    private foo $loo;

    public function __construct(foo $loo)
    {
        $this->foo = $loo;
    }
    function bar():string{
        return $this->foo->foo()." and Bar";
    }
    function jajal()
    {

        $arayNgasal = array(["key kintil"
        [$this->foo->foo() . "kintil anjir"],
            [$this->foo->foo() . "ini baru"]
        ]);
    }
    }

