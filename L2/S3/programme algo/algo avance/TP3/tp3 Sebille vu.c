#include<stdio.h>
#include<string.h>
#include<stdlib.h>
#define N 10


void init_mat(char matrice_init [N] [N]){

	int i;
	int j;

	char nom_fichier[50];

	int x,y;

	for(i=0;i<N;i++){
		for(j=0;j<N;j++){
			matrice_init [i] [j] = 'M';
		}
	}

	printf("veuillez saisir le nom du fichier pour l'initialisation\ninitialisation = ");
	scanf("%s",nom_fichier);

	FILE *fic1;
	fic1 = fopen(nom_fichier,"r");

	while(fic1 == 0){
        	printf("erreur le fichier n'existe pas\nveuillez recommencer la saisie\n");
       		scanf("%s",nom_fichier);
        	fic1 = fopen(nom_fichier,"r");
   	}

	fscanf(fic1,"%i%i",&x,&y);
	while(!feof(fic1)){
		matrice_init [x] [y] = 'V';
        	fscanf(fic1,"%i%i",&x,&y);
		printf("\n");
	}


	/*for(i=0;i<N;i++){
		for(j=0;j<N;j++){
			printf(" %c",matrice_init [i] [j]);
		}
		printf("\n");
	}*/
}

void init_voisin(int matrice_voisin [N] [N],char matrice_init [N] [N]){

	int i;
	int j;
	int nb_voisin = 0;

	for(i=0;i<N;i++){
		for(j=0;j<N;j++){
			if(i-1>=0){
                if(matrice_init [i-1] [j] == 'V'){
					nb_voisin++;
				}
			}
            if(i-1>=0 && j+1<N){
				if(matrice_init [i-1] [j+1] == 'V'){
					nb_voisin++;
				}
            }
            if(j+1<N){
                if(matrice_init [i] [j+1] == 'V'){
                    nb_voisin++;
                }
            }
			if(i+1<N && j+1<N){
				if(matrice_init [i+1] [j+1] == 'V'){
					nb_voisin++;
				}
			}
			if(i+1<N){
				if(matrice_init [i+1] [j] == 'V'){
					nb_voisin++;
				}
			}
			if(i+1<N && j-1>=0){
                if(matrice_init [i+1] [j-1] == 'V'){
                    nb_voisin++;
                }
			}
			if(j-1>=0){
                if(matrice_init [i] [j-1] == 'V'){
                    nb_voisin++;
                }
			}
			if(i-1>=0 && j-1>= 0){
                if(matrice_init [i-1] [j-1] == 'V'){
                    nb_voisin++;
                }
			}
			matrice_voisin [i] [j] = nb_voisin;
			nb_voisin = 0;
		}
	}
	/*for(i=0;i<8;i++){
		for(j=0;j<8;j++){
			printf(" %i",matrice_voisin [i] [j]);
		}
		printf("\n");
	}*/

}
void generation_suivante(int matrice_voisin [N] [N],char matrice_init [N] [N]){

    int i;
    int j;

    for(i=0;i<N;i++){
		for(j=0;j<N;j++){
            if(matrice_init [i] [j] == 'V'){
                if((matrice_voisin [i] [j] != 2) && (matrice_voisin [i] [j] != 3)){
                    matrice_init [i] [j] = 'M';
                }
            }
            else if(matrice_init [i] [j] == 'M'){
                if(matrice_voisin [i] [j] == 3){
                    matrice_init [i] [j] = 'V';
                }
            }
		}
    }
}
void afficher_matrice(char matrice_init [N] [N]){
    int i;
    int j;
    for(i=0;i<N;i++){
		for(j=0;j<N;j++){
			printf(" %c",matrice_init [i] [j]);
		}
		printf("\n");
    }
    printf("\n\n");
}

int main () {

	int i = 0;
	int generation;

	char matrice_init [N] [N];
	int matrice_voisin [N] [N];

	init_mat(matrice_init);

	printf("veuillez saisir le nombre de generation a afficher\nnombre de generation = ");
	scanf("%i",&generation);

	while(i <= generation){
        init_voisin(matrice_voisin,matrice_init);
        generation_suivante(matrice_voisin,matrice_init);
        afficher_matrice(matrice_init);
        i++;
	}
}









