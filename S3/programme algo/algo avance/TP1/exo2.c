#include<stdio.h>
#include<string.h>
#include<stdlib.h>
# define N 20

int main () {

	int i;
	int j;
	char change;
	int min;
	char tab[N];
	int taille;
	

	printf("veuillez saisir la chaine de caractere \n  mot = ");
	scanf("%s",tab);
	taille = strlen(tab);

	for(i=0;i<taille;i++){
		min = i;
		for(j=i+1;j<taille;j++){
			if(tab[j]<tab[min]){
				min = j;	
			}
		}
		change = tab[i];
		tab[i] = tab[min];
		tab[min] =change;
		printf("    mot trié = %s\n",tab);
	}
}