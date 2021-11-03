<?php declare(strict_types=1);

class RomanNumber
{
    public static function decimalToRoman(int $n) : String
    {
        // On remarque que certains cas sont des cas "immuables", dans le sens ou ces valeurs ne se retrouvent nul part ailleurs (un peu comme des chiffres premiers)
        // Pour résoudre ce problème, on stocke tous les cas "immuables" dans un tableau
        // Les valeurs seront triés par ordre décroissant car, pour écrire un chiffre décimal en romain, on commence toujours par le chiffre le plus grand en premier suivi des autres
        
        $romanNumberFix = array(
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1
        );

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
