#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>

#define N 10000
#define TAILLE 500

typedef struct S_s
{
  int * tab_int[TAILLE] ;
  char tab_char[TAILLE] ;
} S_t ;

/*definition des variable globale pour pouvoir les utiliser dans les différent fonction*/
S_t tab[N];

char f3()
{
  char c = 'a' + (rand() % ('z'+1)) ;
  return( c ) ;
}


void f2(int *a)  /*f2 ne retourne rien et modifie la valeur de a */
{
  *a = rand() ;
}


void f1()   /* f1 ne retourne rien atribut juste la valeur a dans tab[i].tab_int[j] et c dans tab[i].tab_char[j]*/
{
  int i , j ;
  int a;
  for( i=0 ; i<N ; i++ )
    {
      for( j=0 ; j<TAILLE ; j++ )
	{
    f2(&a);  // execute la fonction f2 avec l'adresse de la variable a pour la modifier
	  tab[i].tab_int[j] = &a  ;  //il attend une adresse donc il faut lui envoyer une addresse
	  tab[i].tab_char[j] = f3() ;
	}
    }
}



int main()
{
  printf("Debut du programme\n");

  srand(getpid());

  printf("Appel de f1\n");
  f1() ;                                  /*f1 ne renvoie rien donc pas le droit de mettre ? = f1()*/ 
  printf( "Retour de f1\n") ;

  printf("Fin normale du programme\n");
  return(0);
}
