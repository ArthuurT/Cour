                  (*SEBILLE Florian*)


type 'a liste = vide | cons of  'a* 'a liste;;

let tete = function cons(x,y) -> x | vide -> failwith "impossible";;

let suite = function cons(x,y) -> y | vide -> failwith "impossible";;

let lire_car =function nom ->
 let canal=open_in nom in
  let rec lirea =function  () ->
         try let a = input_char canal in
            cons (a ,lirea ())  with
       End_of_file -> begin close_in canal;vide end
      in    lirea ();;

let is_sep = function ` `| `\n` -> true
                     | _ -> false;;


let rec saute_mot = function vide -> vide
        | cons(car,reste) as l -> if is_sep car then l
                  else saute_mot reste;;

let char2str = function car -> make_string 1 car;;

let rec  premier_mot = function vide -> ""
     | cons(car,reste) -> if is_sep car then ""
                else char2str car ^  premier_mot reste;;

let rec analyselex = function vide->vide
  |cons (car,reste) as l -> if is_sep car then
            analyselex reste
    else cons(premier_mot l , analyselex (saute_mot l));;


let tout= function nom -> analyselex(lire_car nom);;


let plus1 = function (a,b) -> (a,b+1);;

let max_2 = fun (a,b) (c,d) -> if b>d then (a,b) else (c,d);;


let rec f1 = function (n,l) -> if l=vide then cons((n,1),vide)
                              else if n < (fst(tete l)) then cons((n,1),l)
                              else if n > (fst(tete l)) then cons ((tete l),(f1(n,suite l)))
                              else cons(plus1(tete l),suite l);;

let rec f2 = function l -> if l = vide then vide else f1(tete l,(f2(suite l)));;

let rec f3 = function l -> if l = vide then failwith "impossible"
                            else if suite l = vide then tete l
                            else  max_2 (tete l) (f3(suite l));;

let res = function l -> fst(f3(f2 l));;


let liste = tout "libe.txt";;
let resultat = res liste;;
