<?php

/*
 * Documentation
 * http://php.net/manual/en/index.php
 */
function decimalToRoman($number)
{
    $numberAsString = strval($number);

    $roman = "";
    $count = strlen($numberAsString);
//    echo("count is $count.\n");
    for ($posR = 0; $posR < $count; $posR++) {
        $posL = $count - 1 - $posR;
//        echo ("$numberAsString: $numberAsString{$posL} at $posL from left $posR from right.\n");
        $romanDigit = digitToRoman($numberAsString{$posL}, $posR);
        $roman = $romanDigit.$roman;
    }

    return $roman;

}

function digitToRoman($digit, $positionFromRight)
{
    if ($positionFromRight == 0) {
        $digits0 = array('', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX');
        if (count($digits0) > $digit)
            return $digits0[$digit];
    }

    if ($positionFromRight == 1) {
        $digits1 = array('', 'X', 'XX', 'XXX', 'XL', 'L', 'LX', 'LXX', 'LXXX', 'XC');
        if (count($digits1) > $digit)
            return $digits1[$digit];
    }

    throw new Exception("Unsupported Digit at position $positionFromRight: " . $digit);


}
?>
