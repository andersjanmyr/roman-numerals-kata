# Instructions

## Installation

* Install JVM 1.5+
* Install Leiningen 2.0.0+, `brew update && brew install leiningen`
* Prepare:

        npm install

* Build manually:

        lein cljsbuild once
        npm test

* Build automatically:

        lein cljsbuild auto
        npm test

## Files

`src/roman_numerals.cljs`
`test/roman_numerals_test.js`
