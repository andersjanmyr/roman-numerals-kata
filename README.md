# Roman Numerals Kata

The object of this kata is to practice TDD with different frameworks.
We do this by creating a function that converts from decimal numbers to
roman numerals. The basic test cases are written in the respective
directories.

## Legend: Make sure this works

    0    = nothing
    1    = I
    2    = II
    3    = III
    4    = IV
    5    = V
    6    = VI
    7    = VII
    8    = VIII
    9    = IX
    10   = X
    20   = XX
    40   = XL
    49   = XLIX
    50   = L
    99   = XCIX
    100  = C
    500  = D
    1000 = M
    4994 = MMMMCMXCIV

More information about roman numerals can be found here:
http://www.novaroma.org/via_romana/numbers.html



## Javascript, Busterjs

BusterJs is a nice framework, similar to Mocha. It supports both assert and
spec style tests.


## ClojureScript, Busterjs

Use Busterjs, but from a higher-level language than Javascript.


## PHP, PHPUnit

PHPUnit is a test framework similar to JUnit. It only supports assert style
tests.


## Ruby, Minitest

MiniTest is a small Ruby test framework that is built into Ruby 1.9+.
It supports both assert and spec style tests.

## C, Homegrown :)

It is easy to write a simple test framework.

## Lua, Busted

Busted is a BDD style framework that uses assertions.

## Clojure, Midje

[Midje](https://github.com/marick/Midje) supports top-down as well as
bottom-up testing, encourages readable tests, supports a balance between
abstraction and concreteness, and tries to be gracious in its treatment
of the people who use it.
