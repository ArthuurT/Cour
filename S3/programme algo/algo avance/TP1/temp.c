#include<stdio.h>
#include<string.h>
#include<stdlib.h>
# define N 20

int main () {

	int i;
	int j;
	int taille;
	int place_tab[N];

	char tab_final[N] [20];
	char tab[N] [20];
	char mot[20];

	printf("veuillez saisir une suite de mot puis saisissez -1\n");
	for(i=0;strcmp(mot,"##")!=0;i++){
		printf("  mot = ");
		scanf("%s",mot);
		if(strcmp(mot,"##")!=0){
			strcpy(tab[i],mot);
		}
	}

	for(i=0;i<N;i++){
		place_tab[i] = 0;
		for(j=0;j<N;j++){
			if(strcmp(tab[j],tab[i])<0 || (strcmp(tab[j],tab[i])==0 && j<i) ){
				place_tab[i]++;	
			}
		}
	}
	for(i=0;i<taille;i++){
		strcpy(tab_final[place_tab[i]],tab[i]);
	}
	for(i=0;i<taille;i++){
		printf("le %i mot est = %s",i,tab_final[i]);
	}
}