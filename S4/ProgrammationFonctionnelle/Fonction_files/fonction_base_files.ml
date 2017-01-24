type 'a liste = vide | cons of 'a * 'a liste;;

let tete = function cons(x,y) -> x | vide -> failwith "impossible";;

let suite = function cons(x,y) -> y | vide -> failwith "impossible";;

let rec Compte0 = function vide -> 0
                          | cons (0,reste) -> 1 + Compte0 reste
                          | cons (tete,reste) -> Compte0 reste;;

let paire = function x -> if x mod 2 = 0 then true else false;;

let rec ComptePaire = function vide -> 0
                              | cons (tete,reste) -> if paire tete then 1 + ComptePaire reste
                                                      else ComptePaire reste;;

let rec ComptePara = fun _ vide -> 0
                        | p (cons (tete,reste)) -> if p tete then 1 + ComptePara p reste
                                                    else ComptePara p reste;;

let rec Remplacer0_1 = function vide -> vide
                          | cons (0,y) -> cons (1,Remplacer0_1 y)
                          | cons (x,y) -> cons (x,Remplacer0_1 y);;

let rec RemplacerImp = function vide -> vide
                          | cons (tete,reste) -> if paire tete then cons (tete,RemplacerImp reste)
                                                  else cons (tete*2,RemplacerImp reste);;

let rect RemplacerPara = fun f vide -> vide
                            | f (cons (tete,reste)) -> cons (f tete,RemplacerPara f reste);;


let rec appartient = fun 'a vide -> false
                        | 'a (cons (tete,reste)) -> if tete = 'a then true
                                                      else appartient 'a reste;;

let rec inclus = fun _ vide -> true
                  | vide _ -> false
                  | a b -> appartient (tete a) b && inclus (suite a) b;;

let egale = fun a b -> inclus a b && inclus b a;;

let rec intersection = fun a b -> if a = vide then vide
                                  else if appartient (tete a) b then cons (tete a,(intersection (suite a) b))
                                  else intersection (suite a) b;;

let rec union = fun a b -> if a = vide then b
                            else if appartient (tete a) b then union (suite a) b
                            else cons ((tete a),(union (suite a) b));;

let rec cardinale = fonction vide -> 0
                            | cons (tete,reste) -> 1 + cardinale reste;;


let l = cons(1,cons(2,cons(3,cons(4,cons(5,cons(6,cons(7,cons(8,cons(9,cons(0,vide))))))))));;
