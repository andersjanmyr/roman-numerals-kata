var buster = require('buster');
var decimalToRoman = require('../lib/roman-numerals');

buster.testCase('decimalToRoman', {
    'returns I for 1': function () {
        assert.equals(decimalToRoman(1), 'I');
    }
});
