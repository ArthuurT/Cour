                  (*SEBILLE Florian*)

(* question 1 *)

let suivant = function n -> if n mod 2 = 0 then n/2 else n*3+1;;





(* question 2 *)

let rec duree = function n -> if n = 1 then 0 else 1 + duree (suivant n);;

let max = function (a,b) -> if a<b then b else a;;

let rec hauteur = function n ->
              if n=1 then 1
              else max(n,hauteur(suivant n));;





(* question 3 *)

let rec dureeT = function (n,res) ->
              if n = 1 then res
              else dureeT(suivant n, res + 1);;

let rec hauteurT = function (n,res) ->
              if n=1 then res
              else hauteurT(suivant n , max(n , res));;




let dureeBis = function n -> dureeT(n,0);;
let hauteurBis = function n -> hauteurT(n,1);;




(* exemple *)
let duree_3 = dureeBis(3);;
let duree_7 = dureeBis(7);;

let hauteur_3 = hauteurBis(3);;
let hauteur_7 = hauteurBis(7);;
