(ns roman-numerals-test
  (:require [midje.sweet :refer :all]
            [roman-numerals :refer :all]))

(facts "about `decimal-to-roman`"
       (fact "it should return the roman numeral"
             (decimal-to-roman 1) => "I"
             (decimal-to-roman 2) => "II")

       (fact "it should handle edge cases"
             (decimal-to-roman 0) => nil))
