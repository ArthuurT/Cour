			(*SEBILLE Florian*)
type 'a liste = vide | cons of  'a* 'a liste;;
type couple = {nom:string;nombre:int};;

let tete = function cons(x,y) -> x | vide -> failwith "impossible";;

let suite = function cons(x,y) -> y | vide -> failwith "impossible";;

let rec lignes = function canal ->
          try let une_ligne = input_line canal in
                cons(une_ligne, lignes canal)
          with End_of_file -> vide;;

let lire = function nom ->
       let canal = open_in nom in
          let resu = lignes canal in
               close_in canal; resu;;

let rec trans = function cons(p,cons(n,reste)) -> cons((p,int_of_string(n)),trans reste)
			| vide -> vide
			| _ -> failwith "personne imcomplete";;

let liste_string = lire "couple.txt";;

let liste_couple = trans liste_string;;

let rec rechercher = fun _ vide -> 0 
			|nom liste -> if fst(tete liste) = nom then snd(tete liste) + rechercher nom (suite(liste))
					else rechercher nom (suite(liste));;

let max = function (a,b) -> if a<b then b else a;;

let rec plus_grand = function liste -> 
			if liste=vide then 0
			else if suite(liste) = vide then snd(tete liste) 
			else max (snd(tete liste),plus_grand (suite liste));;

let rec chercher = function (n,vide) -> failwith "impossible"
			| (n,liste) -> if snd(tete liste) = n then fst(tete liste) 
					else chercher (n,suite(liste));;

let nom_plusgrand = function vide -> failwith "impossible"
			| liste -> chercher (plus_grand liste,liste);;

