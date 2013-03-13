<?php
require 'vendor/autoload.php';
require_once(dirname(__FILE__)) . '/../src/roman-numerals.php';

class RomanNumeralsTest extends PHPUnit_Framework_TestCase
{
    public function test1ReturnsI()
    {
      $roman = decimalToRoman(1);
      $this->assertEquals('I', $roman);
    }
}
?>
