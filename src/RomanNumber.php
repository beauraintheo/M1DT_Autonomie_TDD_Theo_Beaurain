<?php declare(strict_types=1);

class RomanNumber
{
    public static function decimalToRoman(int $n) : String
    {
        $romanNumber = "";
        
        if ($n == 0) {
            return $romanNumber;
        } else if ($n <= 3) {
            for ($i = 1; $i <= $n; $i++) {
                $romanNumber .= "I";
            }
        } else if ($n == 4) {
            $romanNumber = "IV";
        } else if ($n == 5) {
            $romanNumber = "V";
        } else if ($n <= 8) {
            $romanNumber = "V";

            for ($i = 6; $i <= $n; $i++) {
                $romanNumber .= "I";
            }
        } else if ($n == 9) {
            $romanNumber = "IX";
        } else if ($n == 10) {
            $romanNumber = "X";
        }
        return $romanNumber;
    }
}
