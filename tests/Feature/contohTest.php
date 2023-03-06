<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class contohTest extends TestCase
{
    public function testConfig(){
 $namaAwal = config('contoh.nama.namaAwal');
$namaAkhir = config('contoh.nama.namaAkhir');
$email = config('contoh.email');
    $valo = config('contoh.valorantId');


    self::assertEquals("INI ADALAH DEFAULT FIRST",$namaAwal);
        self::assertEquals("INI ADALAH DEFAULT LAST",$namaAkhir);
        self::assertEquals("sucahyana15@gmail.com",$email);
        self::assertEquals("demeterks",$valo);
    }
}
