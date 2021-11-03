<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class RomanNumberTest extends TestCase
{
    public function testDecimalToRoman0()
    {
        $this->assertEquals("", RomanNumber::decimalToRoman(0));
    }

    public function testDecimalToRoman1()
    {
        $this->assertEquals("I", RomanNumber::decimalToRoman(1));
    }

    public function testDecimalToRoman2()
    {
        $this->assertEquals("II", RomanNumber::decimalToRoman(2));
    }

    public function testDecimalToRoman3()
    {
        $this->assertEquals("III", RomanNumber::decimalToRoman(3));
    }

    // public function testDecimalToRoman4()
    // {
    //     $this->assertEquals("", RomanNumber::decimalToRoman(4));
    // }

    // public function testDecimalToRoman5()
    // {
    //     $this->assertEquals("", RomanNumber::decimalToRoman(5));
    // }

    // public function testDecimalToRoman6()
    // {
    //     $this->assertEquals("", RomanNumber::decimalToRoman(6));
    // }

    // public function testDecimalToRoman7()
    // {
    //     $this->assertEquals("", RomanNumber::decimalToRoman(7));
    // }

    // public function testDecimalToRoman8()
    // {
    //     $this->assertEquals("", RomanNumber::decimalToRoman(8));
    // }

    // public function testDecimalToRoman9()
    // {
    //     $this->assertEquals("", RomanNumber::decimalToRoman(9));
    // }

    // public function testDecimalToRoman10()
    // {
    //     $this->assertEquals("", RomanNumber::decimalToRoman(10));
    // }

    // public function testDecimalToRoman47()
    // {
    //     $this->assertEquals("", RomanNumber::decimalToRoman(47));
    // }

    // public function testDecimalToRoman94()
    // {
    //     $this->assertEquals("", RomanNumber::decimalToRoman(94));
    // }

    // public function testDecimalToRoman157()
    // {
    //     $this->assertEquals("", RomanNumber::decimalToRoman(157));
    // }

    // public function testDecimalToRoman755()
    // {
    //     $this->assertEquals("", RomanNumber::decimalToRoman(755));
    // }

    // public function testDecimalToRoman1058()
    // {
    //     $this->assertEquals("", RomanNumber::decimalToRoman(1058));
    // }

    // public function testDecimalToRoman2035()
    // {
    //     $this->assertEquals("", RomanNumber::decimalToRoman(2035));
    // }

    // public function testDecimalToRoman3000()
    // {
    //     $this->assertEquals("", RomanNumber::decimalToRoman(3000));
    // }

    // public function testDecimalToRoman3001()
    // {
    //     $this->assertEquals(false, RomanNumber::decimalToRoman(3001));
    // }
}
