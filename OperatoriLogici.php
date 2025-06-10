<?php
//Date le seguenti variabili:


//Dicharazione Varabili
$a = false;
$b = true;
$c = true;
$d = false;


// Utilizzando la logica di un Sudoku, completare lo schema qui sotto riportato cosi da ottenere i valori stampati dai var_dump() a fondo pagina.

// Ogni blocco dovrà tassativamente avere:

// - 3 AND (&&)
// - 3 OR ( || );
// - 3 TRUE
// - 3 FALSE
// - Non ci sono limitazioni sull’operatore di negazione ( ! )
//Primo Blocco Esempio Completo
$ab = !$a && $b; //true
$ad = $a || $d; // false
$bc = $b && $c; //True
$bd = !$b || $d; //False
$cb = $c && $b; //True
$ca = !$c || $a; //false

//Secondo Blocco Da completare
$cabc = $ca && $bc;//false
$cbbc = $cb || $bc;//true
$bdab = $bd || $ab;//true 
$bccb = $bc && !$cb;//false
$bcab = !$bc || !$ab;//false
$bcca = $bc && !$ca;//true
/*var_dump($cabc);
var_dump($cbbc);
var_dump($bdab);
var_dump($bccb);
var_dump($bcab);
var_dump($bcca);*/

    //Terzo Blocco Da completare
$cbbccabc = $cbbc || $cabc;//true
$bccbbdab = $bccb || $bdab;//true
$cabcbcca = $cabc && $bcca;//false
$bdabbccb = $bdab && $bccb;//false
$cbbcbccb = $cbbc && !$bccb;//true
$cabcbccb = $cabc || $bccb;//false

/*var_dump($cbbccabc);
var_dump($bccbbdab);
var_dump($cabcbcca);
var_dump($bdabbccb);
var_dump($cbbcbccb);
var_dump($cabcbccb);*/

    //Output Esempio Completo
var_dump($cbbccabc); //True
var_dump($bccbbdab); //True
var_dump($cabcbcca); //False
var_dump($bdabbccb); //False
var_dump($cbbcbccb); //False
var_dump($cabcbccb); //True