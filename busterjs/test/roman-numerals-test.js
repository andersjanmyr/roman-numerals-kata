/*
 * Documentation:
 * http://docs.busterjs.org/en/latest/
 */
var buster = require('buster');
var romanToDecimal = require('../lib/roman-numerals');

/* Shortcut to avoid typing "buster." at every assert. */
var assert = buster.assert

/*
 If you want to use spec style syntax:
 describe("My thing", function () {
 it("has the foo and bar", function () {
 expect("foo").toEqual("bar");
 });

 it can be enabled with
 buster.spec.expose();
 */

buster.testCase('romanToDecimal', {
    'returns 0 for empty string': function () {
        assert.equals(romanToDecimal(''), 0);
    },
    'returns 1 for I': function () {
        assert.equals(romanToDecimal('I'), 1);
    },
    'returns 4 for IV': function () {
        assert.equals(romanToDecimal('IV'), 4);
    },
    'returns 5 for V': function () {
        assert.equals(romanToDecimal('V'), 5);
    },
    'returns 8 for VIII': function () {
        assert.equals(romanToDecimal('VIII'), 8);
    },
    'returns 9 for IX': function () {
        assert.equals(romanToDecimal('IX'), 9);
    },
    'returns 10 for X': function () {
        assert.equals(romanToDecimal('X'), 10);
    },
    'returns 40 for XL': function () {
        assert.equals(romanToDecimal('XL'), 40);
    },
    'returns 50 for L': function () {
        assert.equals(romanToDecimal('L'), 50);
    },
    'returns 256 for CCLVI': function () {
        assert.equals(romanToDecimal('CCLVI'), 256);
    },
    'returns 3994 for MMMCMXCIV': function () {
        assert.equals(romanToDecimal('MMMCMXCIV'), 3994);
    }
});
