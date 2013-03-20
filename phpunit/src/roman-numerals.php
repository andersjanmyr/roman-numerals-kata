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
    for ($posR = 0; $posR < $count; $posR++) {
        $posL = $count - 1 - $posR;
        $romanDigit = digitToRoman($numberAsString{$posL}, $posR);
        $roman = $romanDigit.$roman;
    }

    return $roman;

}

function digitToRoman($digit, $positionFromRight)
{
    $digits = array(
        array('', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX'),
        array('', 'X', 'XX', 'XXX', 'XL', 'L', 'LX', 'LXX', 'LXXX', 'XC'),
        array('', 'C', 'CC', 'CCC', 'CD', 'D', 'DC', 'DCC', 'DCCC', 'CM')
      );

    $arr = $digits[$positionFromRight];
    if ($arr)
      return $arr[$digit];

    throw new Exception("Unsupported Digit at position $positionFromRight: " . $digit);


}
?>
