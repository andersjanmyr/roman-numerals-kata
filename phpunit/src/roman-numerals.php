<?php

/*
 * Documentation
 * http://php.net/manual/en/index.php
 */
function decimalToRoman($number)
{
  if ($number == 1)
    return 'I';

  throw new Exception('Unsupported Number: '.$number);
}
?>
