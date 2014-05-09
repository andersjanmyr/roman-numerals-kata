local roman_numerals = require 'roman_numerals'

describe("decimal_to_roman", function()
 it("return I for 1", function()
   local result = roman_numerals.decimal_to_roman(1)
   assert.same('I', result)
 end)
end)
