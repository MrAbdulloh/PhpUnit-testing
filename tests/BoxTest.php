
<?php

use PHPUnit\Framework\TestCase;
use PhpUnitTesting\Box;

class BoxTest extends TestCase
{

    private Box $box;

    protected function setUp(): void
    {
        $this->box = new Box(['Qalam', 'Ruchka', 'Qaychi']);
    }

    public function test_qutini_ichida_element_bormi()
    {
        $this->assertTrue($this->box->has('Qalam'));
        $this->assertFalse($this->box->has('Qala'));
    }

    public function test_qutida_elementni_olish()
    {
        $this->assertEquals('Qalam', $this->box->takeOne());
        $this->assertNotContains('Qalam',$this->box->items);
    }

    public function test_boshharfli_element()
    {
        $this->assertCount(2,$this->box->startsWith('Q'));
        $this->assertContains("Qalam",$this->box->startsWith("Q"));

        $this->assertEmpty($this->box->startsWith("P"));
    }
}
