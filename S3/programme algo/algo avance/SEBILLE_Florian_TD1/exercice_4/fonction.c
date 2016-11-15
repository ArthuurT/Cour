int compter_occurences (char car,int taille,char *mot) {
	int occurences = 0;
	int i;
	for(i=0;i<taille;i++){
		if(mot[i] == car){
			occurences++;
		}
	}
	return occurences;
}
int compter_voyelles(int taille,char *mot){
	int i;
	int occurence_voyelle = 0;
	for(i=0;i<taille;i++){
		if(mot[i] == 'a'){
			occurence_voyelle++;
		}else if(mot[i] == 'e'){
			occurence_voyelle++;
		}else if(mot[i] == 'i'){
			occurence_voyelle++;
		}else if(mot[i] == 'o'){
			occurence_voyelle++;
		}else if(mot[i] == 'u'){
			occurence_voyelle++;
		}else if(mot[i] == 'y'){
			occurence_voyelle++;
		}
	}
	return occurence_voyelle;
}