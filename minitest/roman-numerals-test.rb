require 'minitest/autorun'
require_relative 'roman-numerals'

describe 'RomanNumerals' do
  it 'returns I for 1' do
    roman = RomanNumerals.decimal_to_roman(1)
    assert_equal('I', roman)
  end  
end
