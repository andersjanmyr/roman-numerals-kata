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

    public function test2ReturnsII()
    {
      $roman = decimalToRoman(2);
      $this->assertEquals('II', $roman);
    }

    public function test3ReturnsIII()
    {
      $roman = decimalToRoman(2);
      $this->assertEquals('III', $roman);
    }
}
?>
