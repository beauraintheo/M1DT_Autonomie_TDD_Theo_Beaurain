<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class RomanNumberTest extends TestCase
{
    /* ===== TEST FOR decimalToRoman ===== */

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

    public function testDecimalToRoman4()
    {
        $this->assertEquals("IV", RomanNumber::decimalToRoman(4));
    }

    public function testDecimalToRoman5()
    {
        $this->assertEquals("V", RomanNumber::decimalToRoman(5));
    }

    public function testDecimalToRoman6()
    {
        $this->assertEquals("VI", RomanNumber::decimalToRoman(6));
    }

    public function testDecimalToRoman7()
    {
        $this->assertEquals("VII", RomanNumber::decimalToRoman(7));
    }

    public function testDecimalToRoman8()
    {
        $this->assertEquals("VIII", RomanNumber::decimalToRoman(8));
    }

    public function testDecimalToRoman9()
    {
        $this->assertEquals("IX", RomanNumber::decimalToRoman(9));
    }

    public function testDecimalToRoman10()
    {
        $this->assertEquals("X", RomanNumber::decimalToRoman(10));
    }

    public function testDecimalToRoman47()
    {
        $this->assertEquals("XLVII", RomanNumber::decimalToRoman(47));
    }

    public function testDecimalToRoman94()
    {
        $this->assertEquals("XCIV", RomanNumber::decimalToRoman(94));
    }

    public function testDecimalToRoman157()
    {
        $this->assertEquals("CLVII", RomanNumber::decimalToRoman(157));
    }

    public function testDecimalToRoman955()
    {
        $this->assertEquals("CMLV", RomanNumber::decimalToRoman(955));
    }

    public function testDecimalToRoman1058()
    {
        $this->assertEquals("MLVIII", RomanNumber::decimalToRoman(1058));
    }

    public function testDecimalToRoman2037()
    {
        $this->assertEquals("MMXXXVII", RomanNumber::decimalToRoman(2037));
    }

    public function testDecimalToRoman2944()
    {
        $this->assertEquals("MMCMXLIV", RomanNumber::decimalToRoman(2944));
    }

    public function testDecimalToRoman3000()
    {
        $this->assertEquals("MMM", RomanNumber::decimalToRoman(3000));
    }

    public function testDecimalToRoman3001()
    {
        $this->assertEquals("", RomanNumber::decimalToRoman(3001));
    }

    public function testDecimalToRoman7500()
    {
        $this->assertEquals("", RomanNumber::decimalToRoman(7500));
    }

    /* ===== END OF TEST FOR decimalToRoman ===== */


    /* ===== TEST FOR romanToDecimal ===== */

    // public function testRomanToDecimal0()
    // {
    //     $this->assertEquals(0, RomanNumber::romanToDecimal(""));
    // }

    // public function testRomanToDecimal1()
    // {
    //     $this->assertEquals(1, RomanNumber::romanToDecimal("I"));
    // }

    // public function testRomanToDecimal2()
    // {
    //     $this->assertEquals(2, RomanNumber::romanToDecimal("II"));
    // }

    // public function testRomanToDecimal3()
    // {
    //     $this->assertEquals(3, RomanNumber::romanToDecimal("III"));
    // }

    // public function testRomanToDecimal4()
    // {
    //     $this->assertEquals(4, RomanNumber::romanToDecimal("IV"));
    // }

    // public function testRomanToDecimal5()
    // {
    //     $this->assertEquals(5, RomanNumber::romanToDecimal("V"));
    // }

    // public function testRomanToDecimal6()
    // {
    //     $this->assertEquals(6, RomanNumber::romanToDecimal("VI"));
    // }

    // public function testRomanToDecimal7()
    // {
    //     $this->assertEquals(7, RomanNumber::romanToDecimal("VII"));
    // }

    // public function testRomanToDecimal8()
    // {
    //     $this->assertEquals(8, RomanNumber::romanToDecimal("VIII"));
    // }

    // public function testRomanToDecimal9()
    // {
    //     $this->assertEquals(9, RomanNumber::romanToDecimal("IX"));
    // }

    // public function testRomanToDecimal10()
    // {
    //     $this->assertEquals(10, RomanNumber::romanToDecimal("X"));
    // }

    // public function testRomanToDecimal47()
    // {
    //     $this->assertEquals(47, RomanNumber::romanToDecimal("XLVII"));
    // }

    // public function testRomanToDecimal94()
    // {
    //     $this->assertEquals(94, RomanNumber::romanToDecimal("XCIV"));
    // }

    // public function testRomanToDecimal157()
    // {
    //     $this->assertEquals(157, RomanNumber::romanToDecimal("CLVII"));
    // }

    // public function testRomanToDecimal955()
    // {
    //     $this->assertEquals(955, RomanNumber::romanToDecimal("CMLV"));
    // }

    // public function testRomanToDecimal1058()
    // {
    //     $this->assertEquals(1058, RomanNumber::romanToDecimal("MLVIII"));
    // }

    // public function testRomanToDecimal2037()
    // {
    //     $this->assertEquals(2037, RomanNumber::romanToDecimal("MMXXXVII"));
    // }

    // public function testRomanToDecimal2944()
    // {
    //     $this->assertEquals(2944, RomanNumber::romanToDecimal("MMCMXLIV"));
    // }

    // public function testRomanToDecimal3000()
    // {
    //     $this->assertEquals(3000, RomanNumber::romanToDecimal("MMM"));
    // }

    // public function testRomanToDecimal3001()
    // {
    //     $this->assertEquals(0, RomanNumber::romanToDecimal("MMMI"));
    // }

    // public function testRomanToDecimal7500()
    // {
    //     $this->assertEquals(0, RomanNumber::romanToDecimal("MMMMMMMD"));
    // }

    /* ===== END OF TEST FOR romanToDecimal ===== */
}
