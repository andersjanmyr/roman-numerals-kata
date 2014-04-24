// roman_numerals_test.c

#include "roman_numerals.h"

#include <assert.h>
#include <stdbool.h>
#include <string.h>
#include <stdio.h>

int successful = 0;
int failed = 0;
void assert_str(char* expected, char* actual) {
  if (strcmp(expected, actual)) {
    printf("expected '%s', actual '%s'\n", expected, actual);
    failed++;
  } else {
    successful++;
  }
}

void assert_int(int expected, int actual) {
  if (expected != actual) {
    printf("expected '%d', actual '%d'\n", expected, actual);
    failed++;
  } else {
    successful++;
  }
}


void test_decimal_to_roman_1() {
  char* result = decimal_to_roman(1);
  assert_str("I", result);
}

int main()
{
  test_decimal_to_roman_1();
  if (failed)
    printf("\n%d out of %d assertions failed!\n", failed, failed+successful);
  else
    printf("\nSuccess!\n");
  return failed;
}

