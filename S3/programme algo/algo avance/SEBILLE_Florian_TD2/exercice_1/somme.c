#include <stdio.h>

int main(){
	int somme;
	int n_premier_entiers;
	int indice;

	printf("calcule la somme des n premiers entiers, entrez n : ");
	scanf("%i",&n_premier_entiers);
	indice = 0;
	somme = 0;
	while(indice <= n_premier_entiers){
		//somme += indice;
		indice++;
	}
	printf("la somme est %d\n",somme);
	return 0;
}