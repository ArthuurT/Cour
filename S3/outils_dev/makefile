exe : max.o test_max.o
	gcc -Wall -o exe max.o test_max.o -lcunit -L /usr/local/lib

max.o : max.c
	gcc -c max.c -g -Wextra

test_max.o : test_max.c
	gcc -c test_max.c -g -Wextra
