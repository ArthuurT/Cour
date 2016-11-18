
#include <stdlib.h>
#include <stdio.h>
#include <assert.h>
#include "header.h"
#include "/usr/local/include/CUnit/CUnit.h"
#include "/usr/local/include/CUnit/Basic.h"

int main () {

  int a = 5;
  int b = 7;
  CU_ASSERT_TRUE(max(a,b) == 7);

  a = 7;
  b = 5;
  CU_ASSERT_TRUE(max(a,b) == 7);

  a = 4;
  b = 3;
  CU_ASSERT_TRUE(max(a,b) == 4);

  a = 2;
  b = 2;
  CU_ASSERT_TRUE(max(a,b) == 2);
}
