<?php

/*
 * Documentation
 * http://php.net/manual/en/index.php
 */
function decimalToRoman($number)
{
  $digits = array('', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X');
  if (count($digits) > $number)
    return $digits[$number];

  throw new Exception('Unsupported Number: '.$number);
}
?>
