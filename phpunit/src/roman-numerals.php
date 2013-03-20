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
    $powersOfTen = powersOfTen();
    if ($positionFromRight + 1 > count($powersOfTen))
      throw new Exception("Unsupported Digit at position $positionFromRight: " . $digit);

    $arr = $powersOfTen[$positionFromRight];
    return $arr[$digit];
}


function powersOfTen()
{
  $romanLiterals = array(
    'I', 'V',
    'X', 'L',
    'C', 'D',
    'M', 'V̄',
    'X̄'
  );

  $table = array();
  for ($pt = 0; $pt < 4; $pt++) {
    $first = $pt*2;
    $one = $romanLiterals[$first];
    $five = $romanLiterals[$first+1];
    $ten = $romanLiterals[$first+2];
    array_push($table, array(
      "",
      "$one",
      "$one$one",
      "$one$one$one",
      "$one$five",
      "$five",
      "$five$one",
      "$five$one$one",
      "$five$one$one$one",
      "$one$ten"
    ));
  }
  return $table;
}
?>
