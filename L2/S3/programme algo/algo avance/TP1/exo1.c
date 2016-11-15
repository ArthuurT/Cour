#include<stdio.h>
#include<string.h>
#include<stdlib.h>
# define N 20

int main () {

	int tab [N];
	int i = 0;
	int valeur = 0;
	int change;
	int j;

	printf("veuillez saisir une liste d'entiers puis terminer pas -1\n");
	while(valeur != -1){
		printf("valeur = ");
		scanf("%i",&valeur);
		if(valeur != -1){
			tab[i] = valeur;
			for(j=i;j!=0;j--){
				if(tab[j-1]>tab[j]){
					change = tab[j];
					tab[j] = tab[j-1];
					tab[j-1] = change;
				}
			}
			printf("  ");
			printf("tableau trié = ");
			for(j=0;j<=i;j++){
				printf("%i-",tab[j]);
			}
			printf("\n");
		}
		i++;
	}
				
}