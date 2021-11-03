<?php declare(strict_types=1);

class RomanNumber
{
    public static function decimalToRoman(int $n) : String
    {
        $romanNumber = "";
        
        if ($n === 0)
            return $romanNumber;

        for ($i = 1; $i <= $n; $i++) {
            $romanNumber .= "I";
        }
        
        return $romanNumber;

        // if ($n === 0)
        //     return "";

        // if ($n === 1)
        //     return "I";

        // if ($n === 2)
        //     return "II";

        // if ($n === 3)
        //     return "III";
    }
}
