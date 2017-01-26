

                (* question 1 *)
let rec somme = function (n,f) -> if(n>1) then f( n+(n*n)) +. somme (n-1,f)
                              else f(1);;

let f = function x -> cos (float_of_int(x + 1) );;


                (* question 2 *)

let rec sommeterm = function (n,f,res) -> if n>1 then sommeterm (n-1,f,f( n+(n*n))+.res)
                                          else res+.f(1);;

let y = function i -> sin(float_of_int(i)) *. 2.0;;


                (* question 3 *)
let suivant = function n -> if n mod 2 = 0 then n/2 else n*3+1;;

let rec duree = function n -> if n = 1 then 0 else 1 + duree (suivant n);;


let res = somme (30,f);;

let res2 = sommeterm(30,f,0.0);;

let res = somme (15,y);;

let res2 = sommeterm(15,y,0.0);;
