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

        // Déclaration du string que l'on retournera à la fin de notre programme si $n = 0 ou que $n > 3000
        // Si $n > 0 et que $n <= 3000, alors on concatènera à ce string le nombre de caractères romains correspondant pour avoir le bon résultat à la fin
        $romanNumber = "";

        // Lors de ce for, on parcourt le tableau de nos différents cas "immuables"
        // A chaque fois qu'une occurence sera trouvée dans le chiffre que l'on cherche à atteindre, on ajoutera la lettre correspondante pour traduire notre chiffre de l'état décimal à l'état romain

        foreach ($romanNumberFix as $romanLetter => $value) {
            // Permet de savoir le nombre de fois qu'une occurence de notre tableau apparaît dans notre valeur initiale
            // Exemple : Si $n = 3000, $numbersOfOccFound = 3
            $numbersOfOccFound = intval($n / $value);

            // Utilisation de str_repeat pour répéter X fois la lettre romaine, en fonction du nombres d'occurences trouvées précédemment
            // Exemple : Si $n = 3000, $romanNumber = MMM
            $romanNumber .= str_repeat($romanLetter, $numbersOfOccFound);

            // Utilisation du modulo afin de pouvoir continuer à écrire notre nombre en caractères romains, si nécessaire
            $n %= $value;
        }
        return $romanNumber;
        
        // if ($n == 0) {
        //     return $romanNumber;
        // } else if ($n <= 3) {
        //     for ($i = 1; $i <= $n; $i++) {
        //         $romanNumber .= "I";
        //     }
        // } else if ($n == 4) {
        //     $romanNumber = "IV";
        // } else if ($n == 5) {
        //     $romanNumber = "V";
        // } else if ($n <= 8) {
        //     $romanNumber = "V";

        //     for ($i = 6; $i <= $n; $i++) {
        //         $romanNumber .= "I";
        //     }
        // } else if ($n == 9) {
        //     $romanNumber = "IX";
        // } else if ($n == 10) {
        //     $romanNumber = "X";
        // }
    }
}
