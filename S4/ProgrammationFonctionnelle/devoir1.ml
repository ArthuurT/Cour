

                (* question 1 *)
let rec somme = function (n,f) -> if(n>1) then f( float_of_int(n+(n*n)) ) +. somme (n-1,f)
                              else 0.0;;

let rec somme = function (n,f) -> if(n>1) then float_of_int( f( n+(n*n) ) ) +. somme (n-1,f)
                              else 0.0;;


let f = function x -> cos (float_of_int(x * x + 1 + x) );;

let res = somme (30,f);;


                (* question 2 *)

let rec sommeterm = function (n,f,res) -> if n<1 then sommeterm (n-1,f,res+.f(float_of_int(n+(n*n))))
                                          else res;;





                (* question 3 *)
let suivant = function n -> if n mod 2 = 0 then n/2 else n*3+1;;

let rec duree = function n -> if n = 1 then 0 else 1 + duree (suivant n);;
