/*
 * Documentation:
 * http://docs.busterjs.org/en/latest/
 */
var buster = require('buster');
var romanToDecimal = require('../lib/roman-numerals');

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
    'returns 5 for V': function () {
        assert.equals(romanToDecimal('V'), 5);
    },
    'returns 50 for L': function () {
        assert.equals(romanToDecimal('L'), 50);
    },
    'returns 4 for IV': function () {
        assert.equals(romanToDecimal('IV'), 4);
    }
});
