<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class RomanNumberTest extends TestCase
{
    public function testDecimalToRoman0()
    {
        $this->assertEquals("", RomanNumber::decimalToRoman(0));
    }
}
