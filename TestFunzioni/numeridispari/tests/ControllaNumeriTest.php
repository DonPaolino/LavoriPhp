<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Paolo\paridispari\ControllaNumeri;

class ControllaNumeriTest extends TestCase
{
    private ControllaNumeri $controllaNumeri;

    protected function setUp(): void
    {
        $this->controllaNumeri = new ControllaNumeri();
    }

    public function testParidispari(): void
    {
        $this->assertTrue($this->controllaNumeri->paridispari(2)); // 2 è pari
        $this->assertFalse($this->controllaNumeri->paridispari(3)); // 3 è dispari
        $this->assertTrue($this->controllaNumeri->paridispari(0)); // 0 è pari
    }

    public function testPrimiNumeriDispari(): void
    {
        $expected = [1, 3, 5, 7, 9];
        $this->assertEquals($expected, $this->controllaNumeri->primiNumeriDispari(5));

        $expected = [1, 3, 5, 7, 9, 11, 13, 15, 17, 19];
        $this->assertEquals($expected, $this->controllaNumeri->primiNumeriDispari(10));
    }
}
