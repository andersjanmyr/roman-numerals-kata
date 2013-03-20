<?php

/*
 * Documentation
 * http://php.net/manual/en/index.php
 */
function decimalToRoman($number)
{
  $digits = array('', 'I', 'II', 'III');
  if (count($digits) > $number)
    return $digits[$number];

  throw new Exception('Unsupported Number: '.$number);
}
?>
