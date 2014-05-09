# make or make test to run tests

test: roman_numerals_test
	./roman_numerals_test

roman_numerals_test: roman_numerals_test.c roman_numerals.c roman_numerals.h
	gcc -Wall -o roman_numerals_test roman_numerals_test.c roman_numerals.c -I.

clean:
	rm -f roman_numerals roman_numerals_test



