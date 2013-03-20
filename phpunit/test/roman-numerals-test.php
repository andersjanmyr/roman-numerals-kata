<?php
require 'vendor/autoload.php';
require_once(dirname(__FILE__)) . '/../src/roman-numerals.php';

/*
 * Documentation
 * http://www.phpunit.de/manual/current/en/phpunit-book.html
 */
class RomanNumeralsTest extends PHPUnit_Framework_TestCase
{
    public function test0ReturnsEmptyString()
    {
      $roman = decimalToRoman(0);
      $this->assertEquals('', $roman);
    }

    public function test1ReturnsI()
    {
      $roman = decimalToRoman(1);
      $this->assertEquals('I', $roman);
    }

    public function testSingleDigits()
    {
      $digits = array('', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X');
      for ($i = 0; $i < count($digits); $i++) {
        $roman = decimalToRoman($i);
        $this->assertEquals($digits[$i], $roman);
      }
    }

    public function test11through19()
    {
      $digits = array('X', 'XI', 'XII', 'XIII', 'XIV', 'XV', 'XVI', 'XVII', 'XVIII', 'XIX');
      for ($i = 0; $i < count($digits); $i++) {
        $roman = decimalToRoman(10 + $i);
        $this->assertEquals($digits[$i], $roman);
      }

    }
    public function test20()
    {
        $roman = decimalToRoman(20);
        $this->assertEquals('XX', $roman);
    }
    public function test21through29()
    {
        $digits = array('XX', 'XXI', 'XXII', 'XXIII', 'XXIV', 'XXV', 'XXVI', 'XXVII', 'XXVIII', 'XXIX');
        for ($i = 0; $i < count($digits); $i++) {
            $roman = decimalToRoman(20 + $i);
            $this->assertEquals($digits[$i], $roman);
        }

    }
    public function test40()
    {
        $roman = decimalToRoman(40);
        $this->assertEquals('XL', $roman);
    }
    public function test50()
    {
        $roman = decimalToRoman(50);
        $this->assertEquals('L', $roman);
    }
    public function test99()
    {
        $roman = decimalToRoman(99);
        $this->assertEquals('XCIX', $roman);
    }
    public function test100()
    {
        $roman = decimalToRoman(100);
        $this->assertEquals('C', $roman);
    }
}
?>
