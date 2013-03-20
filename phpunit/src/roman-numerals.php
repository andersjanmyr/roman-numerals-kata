<?php

/*
 * Documentation
 * http://php.net/manual/en/index.php
 */
function decimalToRoman($number)
{
    $numberAsString = strval($number);

    $roman = "";
    $topIndex = strlen($numberAsString) - 1;
    for ($i = 0; $i <= $topIndex; $i++) {
        $romanDigit = digitToRoman($numberAsString{$i}, $topIndex - $i);
        $roman .= $romanDigit;
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

    if ($positionFromRight + 1 > count($digits))
      throw new Exception("Unsupported Digit at position $positionFromRight: " . $digit);

    $arr = $digits[$positionFromRight];
    return $arr[$digit];
}
?>
