<?php

use PHPUnit\Framework\TestCase;

require 'functions.php';
class FunctionTest extends TestCase
{
    public function test_ikkta_sonni_qushganda_tugri()
    {
        $this->assertSame(10,addNumbers(5,5));
    }

    public function test_array_tugri_qaytayapti()
    {
     $this->assertIsArray(returnCars());
    }

    public function test_array_keylari_qaytayapti()
    {

        $this->assertArrayHasKey(1, returnCars());
    }
}