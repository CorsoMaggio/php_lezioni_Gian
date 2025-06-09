<?php
//Ciao sono un commento

/* Commento che va 
a capo */

$stringa = 'Ciao';// Un solo uguale, si chiama segnalazione
//Costanti, che non cambiano
const INTERO = 78;// Tutte le costanti sempre maiuscole

// Come scrivere variabili
$testoNuovoDaScrivere = 'ciaociao'; // Camelcase
$testo_nuovo_da_scrivere = 'ciaociao'; // snake Case (usarlo per i nomi dei file)
$Testo = 'ciaociao';
$teSto = 'ciaociao';

//Come NON scrivere variabili
// $ 2ciao ='Francesco';
$_ciao ='Francesco';
// $_ci.ao ='Francesco';
// $ ciaociao ='Francesco';

//----

//1) Predfiniti, scalari o PRIMITIVI
//2) Composti o User Defined

/* 1000.90
*/
$stringa = 'Ciao'; //stringa
$intero = 67890; // Intero
$float = 56.90; //float (sempre i punti per la cifra con virgola mobile)
$booleano = true; // oppure falso
$null =  null;

//Stringhe
$stringa1 = 'ciao ciao';// non effettuano l'escape
$stringa2 = "$stringa1";// effettua l'escape, evitarlo
$stringa3 = '$stringa2';
?>

